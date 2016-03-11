<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "anything";
$conn = mysqli_connect($servername, $username,"", $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>