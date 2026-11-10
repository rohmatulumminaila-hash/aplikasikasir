<?php
include'koneksi.php';

$nama_pelanggan=$_POST['nama_pelanggan'];
$alamat=$_POST['alamat'];
$notelp=$_POST['notelp'];

mysqli_query($koneksi, "insert into pelanggan(pelanggan_id, nama_pelanggan, alamat, notelp)
values('', '$nama_pelanggan', '$alamat', '$notelp')");

header('location:tampil.php');
?>