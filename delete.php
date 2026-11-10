<?php
include'koneksi.php';

$produk_id=$_GET['produk_id'];

mysqli_query($koneksi, "delete from pelanggan where pelanggan_id='$pelanggan_id'");
header('location:tampil.php')
?>