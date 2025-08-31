<?php
// =======================================================================================
// No.2 - Part 2 - Koneksi ke db mysql
// Studi kasus: Data Mahasiswa
// =======================================================================================

// Koneksi ke database MySQL
$host = "localhost";
$user = "root";
$pass = "";
$db   = "mahasiswa";

$conn = new mysqli($host, $user, $pass, $db);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$pesan = "";