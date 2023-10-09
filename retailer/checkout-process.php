<?php
include '../Model/db.php';
session_start();

$user_id = $_SESSION['user_id'];
$sql = "SELECT DISTINCT dealer_id FROM cart_items WHERE user_id = '$user_id'";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    $dealer_id = $row['dealer_id'];

    // Calculate the total order amount for items associated with the same dealer
    $total_amount = 0;

    $order_items_query = "SELECT * FROM cart_items WHERE user_id = '$user_id' AND dealer_id = '$dealer_id'";
    $order_items_result = mysqli_query($conn, $order_items_query);

    while ($item_row = mysqli_fetch_array($order_items_result, MYSQLI_ASSOC)) {
        $total_amount += $item_row['price'] * $item_row['quantity'];
    }

    // Insert a new order
    $order_insert_query = "INSERT INTO orders (user_id, dealer_id, total_amount, status) VALUES ('$user_id', '$dealer_id', '$total_amount', 'Pending')";
    mysqli_query($conn, $order_insert_query);

    // Get the newly inserted order's ID
    $order_id = mysqli_insert_id($conn);

    // Move cart items to the order_items table for the same dealer
    $move_items_query = "INSERT INTO order_items (order_id, product_id, dealer_id, quantity, price)
                     SELECT '$order_id', product_id, '$dealer_id', quantity, price
                     FROM cart_items
                     WHERE user_id = '$user_id' AND dealer_id = '$dealer_id'";

    if (mysqli_query($conn, $move_items_query)) {
        // Delete cart items for the same dealer
        $clear_cart_query = "DELETE FROM cart_items WHERE user_id = '$user_id' AND dealer_id = '$dealer_id'";
        mysqli_query($conn, $clear_cart_query);
    } else {
        echo "Error: " . $move_items_query . "<br>" . mysqli_error($conn);
    }
}

// Close the database connection
mysqli_close($conn);

// Redirect the user to the order history page
header('location: ../retailer/order_history.php');
