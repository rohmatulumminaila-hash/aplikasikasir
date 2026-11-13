<?php
include'koneksi.php';

$produk_id=$_GET['produk_id'];

mysqli_query($koneksi, "delete from produk where produk_id='$produk_id'");
header('location:databarang.php')
?>