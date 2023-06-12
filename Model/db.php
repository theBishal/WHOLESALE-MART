<?php 
//require_once "helpers.php";


$serverName = "localhost";
$userName = "root";
$password = "";
$databaseName = "web_project";

$conn = new mysqli($serverName, $userName, $password, $databaseName) or die("Connection failed!");
?>