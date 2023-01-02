<?php
include 'koneksi.php';

$nim       	= $_POST['nim'];
$nama		= $_POST['nama'];
$progdi		= $_POST['progdi'];
$jekel     	= $_POST['jekel'];
$alamat    	= $_POST['alamat'];
$tempat_lahir	= $_POST['tempat_lahir'];
$tanggal_lahir	= $_POST['tanggal_lahir'];
$bulan_lahir	= $_POST['bulan_lahir'];
$tahun_lahir	= $_POST['tahun_lahir'];

$query = "INSERT INTO mahasiswa (nim, nama, progdi, jekel, alamat, tempat_lahir, tanggal_lahir, bulan_lahir, tahun_lahir) VALUES ('$nim','$nama','$progdi','$jekel','$alamat', '$tempat_lahir', '$tanggal_lahir', '$bulan_lahir', '$tahun_lahir')";
$hasil = mysqli_query($db, $query);
switch ($hasil) {
	case true:
		header('Location: index.php');
		break;
	default:
		header('Location: input.php');
		break;
}
