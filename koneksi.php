<?php

$koneksi=mysqli_connect("localhost", "root", "" ,"aplikasikasir");

if(mysqli_connect_error()){
    echo'Koneksi databases gagal:'. mysqli_connect_error();
}
?>