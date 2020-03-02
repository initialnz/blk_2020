<?php
session_start();
include'../connection/koneksi.php';
if (isset($_GET['submit'])) {
    $id = $_GET['id'];
    $nama_mahasiswa = $_GET['nama'];
    $nim = $_GET['nim'];
    $jurusan = $_GET['jurusan'];
    $mata_kuliah = $_GET['matkul'];
    $nilai_harian = $_GET['harian'];
    $nilai_kuis = $_GET['kuis'];
    $nilai_uts = $_GET['uts'];
    $nilai_uas = $_GET['uas'];
    $nilai_akhir = ($nilai_harian*10/100)+($nilai_kuis*15/100)+($nilai_uts*35/100)+($nilai_uas*40/100);
        if ($nilai_akhir >= 0 && $nilai_akhir <= 50) {
                $grade = "E";
                } else if ($nilai_akhir <= 65) {
                    $grade = "D";
                } else if ($nilai_akhir <= 72) {
                    $grade = "C";
                } else if ($nilai_akhir <= 83) {
                    $grade = "B";
                } else if ($nilai_akhir <= 100) {
                    $grade = "A";
                } else {
                    $grade = "X";
                }
    if (!empty($nama_mahasiswa) && !empty($nim) && !empty($jurusan) && !empty($mata_kuliah) && !empty($nilai_harian) && !empty($nilai_kuis) && !empty($nilai_uts) && !empty($nilai_uas)) {
        
            if(mysqli_query($connect,"UPDATE mahasiswa SET nama='$nama_mahasiswa', nim='$nim', jurusan='$jurusan', mata_kuliah ='$mata_kuliah', nilai_harian='$nilai_harian', nilai_kuis='$nilai_kuis', nilai_uts='$nilai_uts', nilai_uas='$nilai_uas', nilai_akhir='$nilai_akhir', grade='$grade' WHERE id_mahasiswa='$id'")) {
                echo "<script>alert('Nilai Berhasil Diinput!'); window.location = '../php/datanilai.php';</script>";
            }else{
                echo "<script>alert('Gagal, Coba Lagi!'); window.location = '../php/editnilai.php';</script>";
            }
            
    }else{
        echo "<script>alert('Mohon Isi Bagian Yang Kosong!'); window.location = '../php/editnilai.php';</script>";
    }
}

?>