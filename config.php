<?php
$server = "localhost";
$user = "root";
$pass = "";
$database = "pendaftaran_siswa";

$db =  mysqli_connect($server, $user, $pass, $database);

if (!$db) {
 	die("Gagal terhubung dengan database : ". mysqli_connect_error());
 } 
 ?>