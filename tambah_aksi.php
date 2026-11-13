<?php
include'koneksi.php';

$nama_produk=$_POST['nama_produk'];
$harga=$_POST['harga'];
$stok=$_POST['stok'];

mysqli_query($koneksi, "insert into produk(produk_id, nama_produk, harga, stok)
values('', '$nama_produk', '$harga', '$stok')");

header('location:databarang.php');
?>