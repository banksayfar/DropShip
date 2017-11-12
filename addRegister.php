<?php
require_once'condb.php';

$code = $_POST['code'];
$user = $_POST['user'];
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$birth = $_POST['birth'];
$address = $_POST['address'];
$facebook = $_POST['facebook'];
$line = $_POST['line'];
$email = $_POST['email'];
$password = $_POST['password'];
$gender = $_POST['gender'];


$sql ="INSERT INTO `login`( `code`, `user`, `name`, `lastname`, `birth`, `address`, `facebook`, `line`, `email`, `password`, `gender`) VALUES ('$code', '$user','$name', '$lastname', '$birth', '$address', '$facebook', '$line', '$email', '$password', '$gender')";


        $query = mysqli_query($conn,$sql);

        if ($query) {
          header('Location: login.php');
        }
?>