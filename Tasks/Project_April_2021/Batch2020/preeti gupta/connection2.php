<?php
             error_reporting(0);
             $con = mysqli_connect('localhost','root','','transaction');
             $s = $_POST['Sender'];
             $r = $_POST['Receiver'];
             $amt = $_POST['Amount'];


             $query = "INSERT INTO `transfer`(`Sender`, `Receiver`, `Amount`) VALUES ($s, $r, $amt)";
             $run = mysqli_query($con,$query);
?>