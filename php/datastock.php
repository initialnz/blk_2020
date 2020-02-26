<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
    <?php
    include'../connection/koneksi.php'
    ?>
  </head>
  <body>
<div class="container">
    <div class="title col-md-12">
    <h1 class="text-center">Daftar Barang Selundupan 2020</h1>
    </div>
<?php
$query=mysqli_query($koneksi,"select * from stock") or die(mysqli_error($query));
if(mysqli_num_rows($query)) {
    echo "<table class='table table-striped table-dark'>
  <thead>
    <tr>
      <th scope='col'>id_barang</th>
      <th scope='col'>nama_barang</th>
      <th scope='col'>harga_barang</th>
      <th scope='col'>kategori</th>
      <th scope='col'>stok</th>
    </tr>
  </thead>";
  ?>
  <?php
 while ($row=mysqli_fetch_assoc($query)){ ?>
  <tbody>
    <tr>
      <th scope='row'><?php echo $row['id_barang'];?></th>
      <td><?php echo $row['nama_barang']; ?></td>
      <td><?php echo $row['harga_barang']; ?></td>
      <td><?php echo $row['kategori']; ?></td>
      <td><?php echo $row['stok']; ?></td>
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
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>

















