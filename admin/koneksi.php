<?php

$host     = "localhost";
$user     = "root";
$pass     = "";
$database = "mahasiswa";

$db = mysqli_connect($host, $user , $pass, $database) or die ("gagal koneksi koneksi ke database");