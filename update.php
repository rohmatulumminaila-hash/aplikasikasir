<?
include 'koneksi.php';

$produk_id=$_POST['produk_id'];
$nama_produk=$_POST['nama_produk']; 
$harga=$_POST['harga'];
$stok=$_POST['stok'];   

mysqli_query($koneksi, "update produk set nama_produk='$nama_produk', harga='$harga', stok='$stok' where produk_id='$produk_id'");
header('location:databarang.php');
?>

<html>
    <body>
        <?php
        include 'koneksi.php';
        $produk_id = $_GET['produk_id'];
        $data = mysqli_query($koneksi, "select * from produk where produk_id='$produk_id'");
        $d = mysqli_fetch_array($data);
        ?>
        <h1>Barang</h1>
        <form action="update.php" method="post">
            <fieldset>
                <input type="hidden" name="produk_id" value="<?php echo $d['produk_id']; ?>">
                <label for="nama_produk">Nama Barang:</label>
                <input type="text" name="nama_produk" value="<?php echo $d['nama_produk']; ?>">
            </fieldset>
            <fieldset>
                <label for="harga">Harga:</label>
                <input type="double" name="harga" value="<?php echo $d['harga']; ?>">
            </fieldset>
            <fieldset>
                <label for="stok">Stok:</label>
                <input type="int" name="stok" value="<?php echo $d['stok']; ?>">
            </fieldset>
            <button type="submit">Selanjutnya</button>
        </form>
    </body>