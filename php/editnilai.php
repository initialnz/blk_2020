<?php
session_start();
include'../connection/koneksi.php'
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<style>
    .absol {
        position: absolute;
        width: 60%;
        top: 0;
        bottom: 0;
        right: 0;
        left: 0;
        margin: 20px auto;
    }

    .a {
        background: #2293a5!important;
    }
</style>

<?php
$id=$_GET['id_mahasiswa'];
$query=mysqli_query($connect, "select * from mahasiswa where id_mahasiswa='$id'") or die (mysqli_error($query));
if(mysqli_num_rows($query)) {
    $assoc=mysqli_fetch_assoc($query);
}else{
    echo"<script>alert('Data Yang Anda Masukkan Salah!'); window.history.back();</script>";
}
?>
<div class="container">
    <div class="absol">
        <div class="row a shadow-lg pt-4 rounded">
            <div class="form-group col-md-6 offset-md-3">
                <h3 class="text-center">Edit Nilai</h3>
            </div>
        </div>
        <form class="bg-info pt-4" action="../process/proses_edit.php" method="GET">
        <input type="text" name="id" hidden  value="<?php echo $assoc['id_mahasiswa'];?>">
        <div class="form-row">
            <div class="form-group col-md-6 offset-md-3">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $assoc['nama']; ?>" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6 offset-md-3">
            <label for="nim">NIM</label>
            <input type="text" class="form-control" id="nim" name="nim" value="<?php echo $assoc['nim']; ?>" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6 offset-md-3">
            <label for="jurusan">Jurusan</label>
            <input type="text" class="form-control" id="jurusan" name="jurusan" value="<?php echo $assoc['jurusan'];?>" required>
            </div>
        </div>
            <div class="form-row">
            <div class="form-group col-md-6 offset-md-3">
            <label for="mata_kuliah">Mata Kuliah</label>
            <input type="text" class="form-control" id="mata_kuliah" name="matkul" value="<?php echo $assoc['mata_kuliah'];?>" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-3 offset-md-3">
            <label for="harian">Nilai Harian</label>
            <input type="number" class="form-control" id="harian" name="harian" value="<?php echo $assoc['nilai_harian']; ?>" required>
            </div>
            <div class="form-group col-md-3">
            <label for="uts">Nilai UTS</label>
            <input type="number" class="form-control" id="uts" name="uts" value="<?php echo $assoc['nilai_uts']; ?>" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-3 offset-md-3">
            <label for="kuis">Nilai Kuis</label>
            <input type="number" class="form-control" id="kuis" name="kuis" value="<?php echo $assoc['nilai_kuis']; ?>" required>
            </div>
            <div class="form-group col-md-3">
            <label for="uas">Nilai UAS</label>
            <input type="number" class="form-control" id="uas" name="uas" value="<?php echo $assoc['nilai_uas']; ?>" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-3 offset-md-3">
                <button class="btn btn-success" type="submit" name="submit">Submit</button>
            </div>
        </div>
        </form>
    </div>
</div>




<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>