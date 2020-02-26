<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
    <form action="" method="POST" name="diskon">
        <label for="hargaawal">Harga awal</label>
        <input type="number" name="ha" id="ha"><br>
        <input type="submit" name="submit" value="Submit">
    </form>
    </div>
</body>
</html>

<?php

    if(isset($_POST['submit'])){
        $harga = $_POST['ha'];
        if($harga >= 400000){
            $diskon = $harga*20/100;
            $hargabayar = $harga - $diskon;
            echo "$hargabayar";
        }else{
            echo "$harga";
        }
    }

?>
