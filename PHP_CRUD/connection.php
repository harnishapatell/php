<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "shoppingcart";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if($conn->connect_error)
{
    die("Connection Failed : " . $con->connect_error);
}
?>