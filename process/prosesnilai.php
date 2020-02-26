<?php
include'../connection/koneksi.php';
if (isset($_POST['submit'])) {
    $id = uniqid();
    $nama_mahasiswa = $_POST['nama'];
    $nim = $_POST['nim'];
    $jurusan = $_POST['jurusan'];
    $nilai_harian = $_POST['harian'];
    $nilai_kuis = $_POST['kuis'];
    $nilai_uts = $_POST['uts'];
    $nilai_uas = $_POST['uas'];
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
                echo "$grade";
    if (!empty($nama_mahasiswa) && !empty($nim) && !empty($jurusan) && !empty($nilai_harian) && !empty($nilai_kuis) && !empty($nilai_uts) && !empty($nilai_uas)) {
        
            if(mysqli_query($koneksi,"INSERT INTO mahasiswa VALUES('$id','$nama_mahasiswa','$nim','$jurusan','$nilai_harian','$nilai_kuis','$nilai_uts','$nilai_uas','$nilai_akhir','$grade')")){
                echo "<script>alert('Nilai Berhasil Diinput!'); window.location = '../php/datanilai.php';</script>";
            }else{
                echo "<script>alert('Gagal, Coba Lagi!'); window.location = '../php/inputnilai.php';</script>";
            }
            
    }else{
        echo "<script>alert('Mohon Isi Bagian Yang Kosong!'); window.location = '../php/inputnilai.php';</script>";
    }
}

?>