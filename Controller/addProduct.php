<?php
require_once("../Model/db.php");
session_start();
$product_name = mysqli_real_escape_string($conn, $_POST['product_name']);
$product_description = mysqli_real_escape_string($conn, $_POST['product_description']);
$stock = mysqli_real_escape_string($conn, $_POST['stock']);
$status = mysqli_real_escape_string($conn, $_POST['status']);
$product_image = mysqli_real_escape_string($conn, $_POST['product_image']);
$dealer_id = 1;

if ($status == "ava") {
    $status = 1;
} else {
    $status = 0;
}

$sql  = "INSERT INTO product (product_name,product_description,stock,status,product_image,dealer_id) VALUES ('$product_name','$product_description','$stock','$status','$product_image','$dealer_id')";

if (mysqli_query($conn, $sql)) {
    header("location: ../product.php");
} else {
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
}
