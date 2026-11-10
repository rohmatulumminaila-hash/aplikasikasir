<?php
include 'koneksi.php';
$tanggal_penjualan=$_POST['tanggal_penjualan'];
$total_harga=$_POST['total_harga'];

mysqli_query($koneksi,"insert into penjual(pelangganpelanggan_id, penjual_id,
 tanggal_penjualan, total_harga)values ('','$tanggal_penjualan', '$total_harga')");

 header('location:');