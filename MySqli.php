<?php
$servername = "localhost";
$username = "Cervejeiros";
$password = "teste01";
$banco = "Cervejeirosbeerclub";

// Create connection
$mysqli = new mysqli($servername, $username, $password, $banco);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
} 
/*echo "Connected successfully";*/
?>