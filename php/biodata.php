<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Biodata</title>
</head>
<body>
<div class="container">
    <h1 class="text-center">Biodata</h1>
<form action="../process/proses_biodata.php" method="POST" enctype="multipart/form-data">
    <div class="form-row">
        <div class="col md mb-3">
            <label for="nama">Nama Lengkap</label>
            <input type="text" class="form-control" id="nama" name="fullname" required>
        </div> 
    </div>
<div class="form-row">
    <div class="col-md-4 mb-3">
        <label for="gender">Jenis Kelamin :</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender"  value="Male" checked>
                <label class="form-check-label" for="Male">
                    Male
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender"  value="Female" checked>
                <label class="form-check-label" for="Male">
                    Female
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender"  value="Other" checked>
                <label class="form-check-label" for="Male">
                    Other
                </label>
            </div>
    </div>
    <div class="col-md-4 mb-3">
        <label for="validationDefaultUsername">Tanggal Lahir : </label>
        <input type="date" class="form-control"   name="dateofbirth" required>
    </div>
    <div class="col-md-4 mb-3">
        <label for="hobby">Hobby : </label> <br>
        <input type="checkbox"   name="hobby1" value="tidur">Tidur
        <input type="checkbox"   name="hobby2" value="makan">Makan
        <input type="checkbox"   name="hobby3" value="gaming">Gaming
    </div>
</div>
<div class="form-row">
    <div class="col-md-3 mb-3">
        <label for="email">Email :</label>
        <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <div class="col-md-3 mb-3">
        <label for="validationDefault04">Phone Number :</label>
        <input type="number" class="form-control" id="phonenumber" name="phonenumber" required>
    </div>
    <div class="col-md-6 mb-3">
        <label for="alamat">Alamat :</label>
        <input type="text" class="form-control" id="address" name="address" required>
    </div>
</div>
<div class="form-row">
    <div class="col-md-3 mb-3">
        <input type="file" name="foto">
    </div>
</div>
<button class="btn btn-primary" type="submit" name="submit">Submit</button>
<input class="btn btn-primary" type="reset" value="Reset">
</form>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>


























































<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Biodata</title>
</head>
<body>
    <div class="container">
        <h1>Biodata</h1>
        <form action="" method="POST">
            <label for="fname">Full Name :</label><br>
            <input type="text" placeholder="Your Full Name" name="fullname"><br>
            <label for="gender">Gender :</label><br>
            <input type="radio" id="male" name="gender">
            <label for="male">Male</label><br>
            <input type="radio" id="female" name="gender">
            <label for="female">Female</label><br>
            <input type="radio" id="other" name="gender">
            <label for="other">Other</label><br>
            <label for="dateofbirth">Date of Birth :</label>
            <input type="date" name="dateofbirth"><br>
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" placeholder="example@mail.com"><br>
            <label for="ponenumber">Phone Number :</label>
            <input type="number" name="phonenumber"><br>
            <label for="address">Address :</label>
            <textarea name="address" id="address" cols="30" rows="5"></textarea><br>
            <input type="submit" value="Submit" name="submit">
            <input type="reset" value="Reset">
        </form>
    </div>
</body>
</html> -->