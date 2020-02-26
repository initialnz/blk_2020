<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
<div class="container">
   <div class="title col-md-12">
    <h1 class="text-center">Input Data Barang Selundupan</h1>
    </div>
    <br>
    <br>
    <form action="../process/proses_diskon.php" method="POST">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="nama_barang">Nama Barang</label>
      <input type="text" class="form-control" id="inputNamaBarang" name="namabarang">
    </div>
    <div class="form-group col-md-6">
      <label for="harga_barang">Harga Barang</label>
      <input type="text" class="form-control" id="inputHargaBarang" name="hargabarang">
    </div>
  </div>
    <div class="form-group">
    <label for="kategori">Kategori</label>
    <input type="text" class="form-control" id="inputKategori" name="kategoribarang">
  </div>
  <div class="form-group">
    <label for="stok">Stok</label>
    <input type="text" class="form-control" id="inputStok" name="stokbarang">
  </div>
  <button type="submit" class="btn btn-primary" name="submitbarang">Submit</button>
</form>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>