<?php
    if(isset($_POST['upload'])) {
        $nama_file = $_FILES['file']['foto'];
        $file_tmp = $_FILES['file']['tmp_name'];
        $format = explode(".", $nama_file);
        $ekstensi = end($format);
        $md5file =uniqid(). "." . $ekstensi;

        $lokasi = "../upload/";
        $fungsi_upload = move_uploaded_file($file_tmp, $lokasi.$md5file);
        if($fungsi_upload) {
            echo "Upload Berhasil!<br>";
            echo "link: <a href= ' ". $lokasi.$md5file ." '> ". $md5file. "</a>";
        }else{
            echo "Upload Gagal!";
        }
}
?>