<?php
$host = "localhost"; // Replace with your database host
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "photo_db";

//Koneksi database
$conn = new mysqli($host, $username, $password, $dbname);

//cek apakah terjadi kesalahan koneksi 
if($conn->connect_error){
    die("Connection failed:" . $conn->connect_error);
}
?>