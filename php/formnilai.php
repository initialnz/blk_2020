
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Form Nilai</title>
  </head>
  <body>
  
    <!-- Start -->
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col md-7">
              <div class="card">
                <div class="card-header" style="background-color:#05b9d6">
                  Perhitungan Nilai Akhir        
                </div>
                <div class="card-body" style="background-color:#a1d9e2">
                  <form action="" method="POST">
                    <div class="form-group">
                      <label for="nama">Nama</label>
                      <input type="text" class="form-control" id="nama"  name="nama">
                    </div>
                    <div class="form-group">
                      <label for="nim">NIM</label>
                      <input type="number" class="form-control" id="nim" placeholder="xxxxxxxxxxxxx" name="nim">
                    </div>
                    <div class="form-group">
                      <label for="jurusan">Jurusan</label>
                      <input type="text" class="form-control" id="jurusan" name="jurusan">
                    </div>
                  </form>  
                </div>
              </div>
            </div>
            <div class="col md-3">
              <div class="card">     
                <div class="card-header" style="background-color:#05b9d6">
                  Nilai Ulangan        
                </div>
                <div class="card-body" style="background-color:#a1d9e2">
                    <form action="" method="POST">
                      <div class="form-group">
                        <label for="harian">Harian</label>
                        <input type="number" class="form-control" id="harian" name="harian">
                      </div>
                      <div class="form-group">
                        <label for="quiz">Quiz</label>
                        <input type="number" class="form-control" id="quiz" name="quiz">
                      </div>
                      <div class="form-group">
                        <label for="uts">UTS</label>
                        <input type="number" class="form-control" id="uts" name="uts">
                      </div>
                      <div class="form-group">
                        <label for="uas">UAS</label>
                        <input type="number" class="form-control" id="uas" name="uas">
                      </div>           
                        <button type="submit" class="btn btn-primary" name="submit" value="s">Submit</button>
                    </form>
                </div>
              </div>               
            </div>
        </div> 
    </div>
    <div class="container">
      <div class="row text-center justify-content-center">
        <div class="col-md-4">
        <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
          <div class="card-header">Nilai Akhir</div>
          <div class="card-body">
          <?php
            if(isset($_POST['submit'])){
              $nilai_harian = $_POST['harian']*10/100;
              $nilai_quiz = $_POST['quiz']*15/100;
              $nilai_uts = $_POST['uts']*35/100;
              $nilai_uas = $_POST['uas']*40/100;
              $nilai_akhir = $nilai_harian + $nilai_quiz + $nilai_uts + $nilai_uas;
              if ($nilai_akhir >= 0 && $nilai_akhir <= 50) {
                $grade = "Grade E";
              } else if ($nilai_akhir <= 65) {
                $grade = "Grade D";
              } else if ($nilai_akhir <= 72) {
                $grade = "Grade C";
              } else if ($nilai_akhir <= 83) {
                $grade = "Grade B";
              } else if ($nilai_akhir <= 100) {
                $grade = "Grade A";
              } else {
                $grade = "X";
              }
              echo "$nilai_akhir | $grade";

            }
          ?>
          </div>
        </div>
        </div>
      </div>
    </div>





<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>

    


