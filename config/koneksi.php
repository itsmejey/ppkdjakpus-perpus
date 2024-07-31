<?php
$host_koneksi = "localhost";
$username_koneksi = "root";
$password_koneksi = "";
$database_koneksi = "perpus";

// Koneksi ke database
$koneksi = mysqli_connect($host_koneksi, $username_koneksi, $password_koneksi, $database_koneksi);

// Cek koneksi
if (!$koneksi) {
  die("Koneksi database gagal: " . mysqli_connect_error());
}
