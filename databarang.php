<html>
      <body>
    <table border="1">
        <h1>DATA BARANG</h1>
        <td>NO</td>
        <td>NAMA PRODUK</td>
        <td>HARGA</td>
        <td>STOK</td>
        <td>AKSI</td>
        <?php
        include 'koneksi.php';
        $data = mysqli_query($koneksi, "select * from produk");
        $no=1;
        while($d = mysqli_fetch_array($data)){
            ?>
 <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $d['nama_produk']; ?></td>
        <td><?php echo $d['harga']; ?></td>
        <td><?php echo $d['stok']; ?></td>
         <td><a href="delete.php?produk_id=<?php echo $d['produk_id']; ?>">hapus</a></td>
        <td><a href="produk.php">tambah</a></td>
        <td><a href="update.php?produk_id=<?php echo $d['produk_id']; ?>">edit</a></td>
    </tr>
    <?php
        }
       ?>
       </table>

</body>
</table>
</html>