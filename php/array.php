<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="" method="POST">
                    <input type="text" name="buah">
                    <input type="submit" value="Submit" name="submit">
                </form>
            </div>
        </div>
    </div>

<?php

// array dengan tulisan berwarna
if(isset($_POST['submit'])){
    $buah = $_POST['buah'];
    $buahsegar = ["melon", "semangka", "nangka", "durian"];
    if($buah==$buahsegar[0]){
        echo "<p style='color:green'>$buah</p>";
    }elseif($buah==$buahsegar[1]){
        echo "<p style='color:red'>$buah</p>";
    }elseif($buah==$buahsegar[2]){
        echo "<p style='color:yellow'>$buah</p>";
    }elseif($buah==$buahsegar[3]){
        echo "<p style='color:green'>$buah</p>";
    }
}

?>

</body>
</html>