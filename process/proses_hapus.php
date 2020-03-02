<?php
include'../connection/koneksi.php';

$id = $_GET['id_mahasiswa'];
$hapus = mysqli_query($connect, "DELETE FROM mahasiswa WHERE id_mahasiswa='$id' ") or die(mysqli_error($hapus));
if ($hapus) {
    echo "<script>alert('Data Berhasil Dihapus!'); window.location = '../php/datanilai.php';</script>";
}else{
    echo "<script>alert('Gagal, Coba Lagi!'); window.location = '../php/editnilai.php';</script>";
}

?>