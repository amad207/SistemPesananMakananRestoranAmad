<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "restoran_amad";

// Sambung ke database
$conn = new mysqli($servername, $username, $password, $dbname);

// Semak sambungan
if ($conn->connect_error) {
    die("Sambungan Gagal: " . $conn->connect_error);
}
?>
