<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Rekapitulasi Nilai Mahasiswa</title>
    <?php
    include'../connection/koneksi.php'
    ?>
  </head>
  <body>
<div class="container">
    <div class="title col-md-12">
    <h1 class="text-center">Rekapitulasi Nilai Mahasiswa</h1>
    </div>
<?php
$query=mysqli_query($connect,"select * from mahasiswa") or die(mysqli_error($query));
if(mysqli_num_rows($query)) {
    echo "<table class='table table-striped table-dark'>
  <thead>
    <tr>
      <th scope='col'>nama</th>
      <th scope='col'>nim</th>
      <th scope='col'>jurusan</th>
      <th scope='col'>mata_kuliah</th>
      <th scope='col'>nilai_harian</th>
      <th scope='col'>nilai_kuis</th>
      <th scope='col'>nilai_uts</th>
      <th scope='col'>nilai_uas</th>
      <th scope='col'>nilai_akhir</th>
      <th scope='col'>grade</th>
      <th scope='col' colspan=2>option</th>
    </tr>
  </thead>";
  ?>
  <?php
 while ($assoc=mysqli_fetch_assoc($query)){ ?>
  <tbody>
    <tr>
      <th scope='row'><?php echo $assoc['nama'];?></th>
      <td><?php echo $assoc['nim']; ?></td>
      <td><?php echo $assoc['jurusan']; ?></td>
      <td><?php echo $assoc['mata_kuliah']; ?></td>
      <td><?php echo $assoc['nilai_harian']; ?></td>
      <td><?php echo $assoc['nilai_kuis']; ?></td>
      <td><?php echo $assoc['nilai_uts']; ?></td>
      <td><?php echo $assoc['nilai_uas']; ?></td>
      <td><?php echo $assoc['nilai_akhir']; ?></td>
      <td><?php echo $assoc['grade']; ?></td>
      <td><a href='editnilai.php?id_mahasiswa=<?php echo $assoc['id_mahasiswa']?>'><button type="button" class="btn btn-success pl-3 pr-3">Edit</button></a></td>
        <td><a href='../process/proses_hapus.php?id_mahasiswa=<?php echo $assoc['id_mahasiswa']?>'><button type="button" class="btn btn-danger pl-3 pr-3">Hapus</button></a></td>

    </tr>
  </tbody>
  <?php
  }
  ?>
</table>
<?php
}else{
    echo"Data Tidak Ditemukan!";
    }
    ?>
<a href="inputnilai.php"><button type="button" class="btn btn-info pl-3 pr-3">Back</button></a>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>

















