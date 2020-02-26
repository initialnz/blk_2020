<?php
include'../connection/koneksi.php';
if(isset($_POST['submitbarang'])) {
    $id = uniqid();
    $nama_barang = $_POST['namabarang'];
    $harga_barang = $_POST['hargabarang'];
    $kategori_barang = $_POST['kategoribarang'];
    $stok_barang = $_POST['stokbarang'];
    $input = mysqli_query($koneksi, "insert into stock values('$id','$nama_barang','$harga_barang','$kategori_barang','$stok_barang')");
    echo "<script>alert('Barang Berhasil Diinput!'); window.location = '../php/datastock.php';</script>";
    }else{
            echo"Harap Input Data Barang!";
        }

?>