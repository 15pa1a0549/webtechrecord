<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "mysql" ;


$conn = mysqli_connect($servername, $username, $password, $db) or die("DB Connection failed");
echo "done";

?>

