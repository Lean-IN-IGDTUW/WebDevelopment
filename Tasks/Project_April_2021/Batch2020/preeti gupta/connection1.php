<?php
error_reporting(0);
$userid = $_POST['UserId'];
$username = $_POST['Username'];
$email = $_POST['Email'];
$amount = $_POST['Amount'];
$con = mysqli_connect('localhost','root','','transaction');
$query = "INSERT INTO `users`(`UserId`, `Username`, `Email`, `Amount`) VALUES ($userid, '$username', '$email', $amount)";
$run = mysqli_query($con,$query);
?>