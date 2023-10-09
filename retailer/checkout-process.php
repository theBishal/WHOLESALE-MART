<?php
include '../Model/db.php';
session_start();

$user_id = $_SESSION['user_id'];
$sql = "SELECT * FROM cart_items WHERE user_id = '$user_id'";
$result = mysqli_query($conn, $sql);
$total_amount = 0;
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    $total_amount = $total_amount + $row['price'] * $row['quantity'];
}



$order_insert_query = "INSERT INTO orders (user_id, total_amount, status) VALUES ($user_id, $total_amount, 'Pending')";
mysqli_query($conn, $order_insert_query);

$order_id = mysqli_insert_id($conn);

$move_items_query = "INSERT INTO order_items (order_id, product_id, quantity, price)
                     SELECT $order_id, product_id, quantity, price
                     FROM cart_items
                     WHERE user_id = $user_id";

if (mysqli_query($conn, $move_items_query)) {

    $clear_cart_query = "DELETE FROM cart_items WHERE user_id = $user_id";
    mysqli_query($conn, $clear_cart_query);
    header('location: ../retailer/order_history.php');
} else {
    echo "Error: " . $move_items_query . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
