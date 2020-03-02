<?php
$server="localhost";
$username="root";
$password="";
$db="blk";

$connect=mysqli_connect($server, $username, $password, $db)or die(mysqli_error($connect));

?>