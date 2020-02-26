<?php
    for ($i = 0; $i <= 10; $i++){
        echo "The number is : $i <br>";
    }
?>

-------------------------------------------------
<br>

<?php
for ($i = 0; $i <= 10; $i++){
    if ($i%2==0){
        echo "Angka Genap : $i <br>";
    }
}
?>

-------------------------------------------------
<br>

<?php
for ($i = 0; $i <= 10; $i+=2){
    echo "Angka Genap : $i <br>";
}
?>

-------------------------------------------------
<br>

<?php
for ($i = 0; $i <= 10; $i++){
    if ($i%2!=0){
        echo "Angka Ganjil : " .$i. "<br>";
    }
}
?>

-------------------------------------------------
<br>

<?php
for ($i = 1; $i <= 10; $i+=2){
    echo "Angka Ganjil : " .$i. "<br>";
}
?>

-------------------------------------------------
<br>

<?php
for ($i = 0; $i <= 10; $i++){
    if ($i%2==0){
        echo "Angka Genap : $i <br>";
    }
    else{
        echo "Angka Ganjil : " .$i. "<br>";
    }
}
?>

-------------------------------------------------
<br>

<?php

// contoh 1

for ($i = 1; $i <= 10; $i++)
    {
        echo $i. "<br>";
    }

// echo "<br><br>"

// contoh 2

// for ($i = 1; : $i++)
//     {
//         if ($i > 10)
//         {
//             break;
//         }
//         echo $i;
//     }

// echo "<br><br>"

// contoh 3

// $i = 1
// for (; ; )
//     {
//         if ($i > 10)
//         {
//         break;
//         }
//         echo $i;
//         $i++
//     }

// echo "<br><br>";

// contoh 4

// for ($i = 1; $i <= 10; print "$i", $i++);




?>