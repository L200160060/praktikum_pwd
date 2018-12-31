<?php
error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED);
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'informatika';

$conn = mysqli_connect($host,$user,$pass,$db) or die();
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>