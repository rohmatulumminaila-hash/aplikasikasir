<?php
  include 'koneksi.php';
  $pesan="";
  if(isset($_POST['login'])){
    
  $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query($koneksi, "SELECT * FROM users WHERE username='$username' AND password='$password'");
    $data = mysqli_fetch_array($query);
    if($data){
        $_SESSION['username'] = $data['username'];
        $_SESSION['password'] = $data['password'];
         header("location: index.php");
    } 
    }else{
        $pesan = "Login gagal, silahkan coba lagi.";
    } 
   ?>