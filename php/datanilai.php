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
$query=mysqli_query($koneksi,"select * from mahasiswa") or die(mysqli_error($query));
if(mysqli_num_rows($query)) {
    echo "<table class='table table-striped table-dark'>
  <thead>
    <tr>
      <th scope='col'>nama</th>
      <th scope='col'>nim</th>
      <th scope='col'>jurusan</th>
      <th scope='col'>nilai_harian</th>
      <th scope='col'>nilai_kuis</th>
      <th scope='col'>nilai_uts</th>
      <th scope='col'>nilai_uas</th>
      <th scope='col'>nilai_akhir</th>
      <th scope='col'>grade</th>
    </tr>
  </thead>";
  ?>
  <?php
 while ($row=mysqli_fetch_assoc($query)){ ?>
  <tbody>
    <tr>
      <th scope='row'><?php echo $row['nama'];?></th>
      <td><?php echo $row['nim']; ?></td>
      <td><?php echo $row['jurusan']; ?></td>
      <td><?php echo $row['nilai_harian']; ?></td>
      <td><?php echo $row['nilai_kuis']; ?></td>
      <td><?php echo $row['nilai_uts']; ?></td>
      <td><?php echo $row['nilai_uas']; ?></td>
      <td><?php echo $row['nilai_akhir']; ?></td>
      <td><?php echo $row['grade']; ?></td>
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

















