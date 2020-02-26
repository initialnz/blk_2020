<?php
include'../connection/koneksi.php';
    if(isset($_POST['continue'])){
        $id=uniqid();
        $username = $_POST['signup-username'];
        $password = $_POST['signup-password'];
        $confirm = $_POST['confirm-password'];
            if ($password == $confirm) {
        $insert_query = mysqli_query($koneksi, "insert into user values(md5('$id'), '$username',md5('$password'),'user')");
        echo "<script>alert('Berhasil Terdaftar, Silahkan Login'); window.location = '../php/login.php';</script>";
        }else{
            echo"Password salah";
        }
    }








?>