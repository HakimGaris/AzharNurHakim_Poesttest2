<?php 
  $server = "localhost";
  $username = "root";
  $password = "";
  $database = "log1";
  $koneksi = mysqli_connect($server, $username, $password, $database);
  if (!$koneksi) {
    die("Gagal terhubung ke database" . mysqli_connect_error());
  }
?>