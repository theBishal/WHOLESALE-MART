<?php
include '../Model/db.php';


$f_name = mysqli_real_escape_string($conn, $_POST['f_name']);
$l_name = mysqli_real_escape_string($conn, $_POST['l_name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$phone_no = mysqli_real_escape_string($conn, $_POST['phone_no']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$hash = md5($password);
$acc_type = mysqli_real_escape_string($conn, $_POST['acc_type']);
$address = mysqli_real_escape_string($conn, $_POST['address']);
$store_name = mysqli_real_escape_string($conn, $_POST['store_name']);
$image = mysqli_real_escape_string($conn, $_POST['image']);




$sql = "INSERT INTO user (f_name,l_name,email,phone_no,password,acc_type,address,store_name,image) VALUES ('$f_name','$l_name','$email','$phone_no','$hash','$acc_type','$address','$store_name','$image')";

if (mysqli_query($conn, $sql)) {
    header("location: ../register_login.php");
} else {
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>

<!-- // <button type="submit" class="submit">Sign Up</button> -->