<?php 
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$id = $_POST['text'];
$password = $_POST['password'];

// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi, "select * from user1 where id='$id' and password='$password'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah id dan password ditemukan pada database
if($cek > 0) {
    
    $data = mysqli_fetch_assoc($login);

    // cek jika user login sebagai admin
    if($data['level']=="admin"){

        // buat session login username
        $_SESSION['id'] = $id;
        $_SESSION['level'] = "admin";
        // alihkan ke halaman dashboard admin
        header("location:home.php");

    // cek jika user login sebagai user    
    }else if($data['level']=="user"){
        // buat session login dan id
        $_SESSION['id'] = $id;
        $_SESSION['level'] = "user";

        // alihkan ke halaman dashboard user
        header("location:daftar-buku.php");

    }else{

        // alihkan ke halaman login kembali
        header("location:login.php?pesan=gagal");
    }
}else{
    header("location:login.php?pesan=gagal");
}
?>