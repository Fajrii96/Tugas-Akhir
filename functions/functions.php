<?php
$host = "localhost"; 
$user = "root"; 
$password = ""; 
$database = "spk_wisata_db";

// Membuat koneksi (Gunakan $password dan $database)
$conn = new mysqli($host, $user, $password, $database); 

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>