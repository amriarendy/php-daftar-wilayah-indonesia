<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "db";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully";
}

$base_url = 'http://localhost/wilayah-nusantara';
$time_zone = date_default_timezone_set("Asia/Jakarta");
