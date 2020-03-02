<?php
session_start();
include'../connection/koneksi.php';
        if(isset($_POST['login'])){
            $username = $_POST['uname'];
            $password =$_POST['pass'];
            
            // ini adalah query
            $login=mysqli_query($connect,"select * from user where username='$username' and password=md5('$password')");

            // ini adalah check data
            $check=mysqli_num_rows($login);

            //ini untuk menampilkan definisi data
            $data=mysqli_fetch_assoc($login);

            if($check>0){
                if($data['level']=="admin"){
                    $_SESSION['username']=$data['username'];
                    $_SESSION['level']=$data['level'];
                    $_SESSION['status']='login';

                    echo "<script> alert(window.location.href='../php/inputnilai.php');
                        </script>";
                }elseif($data['level']=='user'){

                    echo "<script> alert(window.location.href='../php/diskon.php');
                    </script>";
                }else{
                    echo "Login Gagal!";
                }
            }else{
                echo "Login Gagal!!!";
            }
    }
?>
