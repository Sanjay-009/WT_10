<?php

$dbhost = 'localhost';
$username = 'root';
$password = '';
$dbname = 'details';

$mysqli = mysqli_connect($dbhost, $username, $password, $dbname);

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $res = mysqli_query($mysqli, "INSERT into form values('', '$name', '$password', '$email', '$phone')");

    if($res) {
        echo "Registration Successful..";
    }
    else {
        echo "Registration Failed!!";
    }
}
?>