<?php
include_once('connect.php');
$fullname = $_POST['fullname'];
$userName = $_POST['username'];
$email = $_POST['email'];
$tel = $_POST['phonenumber'];
$pass = $_POST['password'];

$insert = mysqli_query($con,"INSERT INTO user values('','$fullname','$userName','$email','$tel','$pass');
if($insert){
echo "user inserted well";
else
echo "fail to insert";
?>
