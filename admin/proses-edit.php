<?php
include 'koneksi.php';
$id_mahasiswa = $_POST['id_mahasiswa'];
$nim		= $_POST['nim'];
$nama		= $_POST['nama'];
$progdi		= $_POST['progdi'];
$jekel     	= $_POST['jekel'];
$alamat    	= $_POST['alamat'];
$tempat_lahir	= $_POST['tempat_lahir'];
$tanggal_lahir	= $_POST['tanggal_lahir'];
$bulan_lahir	= $_POST['bulan_lahir'];
$tahun_lahir	= $_POST['tahun_lahir'];

$query = "UPDATE mahasiswa 
        SET nim 	= '$nim',
            nama 	= '$nama',
            progdi	= '$progdi',
            jekel 	= '$jekel',
            alamat 	= '$alamat',
            tempat_lahir	= '$tempat_lahir',
            tanggal_lahir	= '$tanggal_lahir',
            bulan_lahir		= '$bulan_lahir',
            tahun_lahir		= '$tahun_lahir'

        WHERE id_mahasiswa = '$id_mahasiswa'";

$hasil = mysqli_query($db, $query);
if ($hasil == true) {
    header('Location: index.php');
} else {
    header('Location: form-edit.php');
}