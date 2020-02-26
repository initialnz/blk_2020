<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pengolahan Form</title>
</head>
<body>
    <div>
        <form action="" method="POST">
            <label for="fname">Full Name :</label><br>
            <input type="text" placeholder="Your Full Name" name="fullname"><br>
            <label for="gender">Gender :</label><br>
            <input type="radio" id="male" name="gender" value="male">
            <label for="male">Male</label><br>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">Female</label><br>
            <input type="radio" id="other" name="gender" value="other">
            <label for="female">Other</label><br>
            <label for="dateofbirth">Date of Birth :</label>
            <input type="date" name="dateofbirth"><br>
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" placeholder="example@mail.com"><br>
            <label for="ponenumber">Phone Number :</label>
            <input type="number" name="phonenumber"><br>
            <label for="address">Address :</label>
            <input type="textarea" placeholder="Your address" name="address"><br>
            <input type="submit" value="Submit" name="submit">
            <input type="reset">
        </form>
    </div>
</body>
</html>

<?php

if (isset($_POST['submit'])) {
    $name = $_POST['fullname'];
    $gender = $_POST['gender'];
    $dateofbirth = $_POST['dateofbirth'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];
    $address = $_POST['address'];
        echo "My Name is : " .$name. ",<br>";
        echo "I am a $gender, ";
        echo "I was born in $dateofbirth. ";
        echo "You can contact me by my email <b>$email</b> or by my phone number <b>$phonenumber</b>. ";
        echo "For girl only, you can visit my home at $address.";
}

?>