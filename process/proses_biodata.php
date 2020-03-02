<?php
$connect = mysqli_connect("localhost", "root", "", "blk") or die(mysqli_error($connect));

if(isset($_POST['submit'])) {
    $id = uniqid();
    $nama = $_POST['fullname'];
    $gender = $_POST['gender'];
    $dob = $_POST['dateofbirth'];
    $email = $_POST['email'];
    $phone = $_POST['phonenumber'];
    $alamat = $_POST['address'];
    $hobby1 = $_POST['hobby1'];
    $hobby2 = $_POST['hobby2'];
    $hobby3 = $_POST['hobby3'];
    $hobby = ($hobby1. ',' .$hobby2. ',' .$hobby3);
    $nama_file = $_FILES['foto']['name'];
    $file_tmp = $_FILES['foto']['tmp_name'];
    $format = explode(".", $nama_file);
    $ekstensi = end($format);
    $foto =md5($nama_file). "." . $ekstensi;

        $lokasi = "../upload/";
        $fungsi_upload = move_uploaded_file($file_tmp, $lokasi.$foto);

    $query = mysqli_query($connect, "INSERT INTO biodata values ('$id', '$nama', '$gender', '$dob', '$email', '$phone', '$alamat','$foto','$hobby')")or die(mysqli_error($query));
    if ($query) {
        echo "<script>alert('Data Berhasil Diinput!'); window.location='../php/biodata.php';</script>";
    }else{
        echo "<script>alert('Gagal Coba Lagi!'); window.location ='../php/biodata.php';</script>";
    }

}















?>