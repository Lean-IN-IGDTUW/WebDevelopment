<?php
session_start();

$con = mysqli_connect('localhost','root');
if($con)
{
    echo " ";
}
else{
    echo "not connected";
}

$db = mysqli_select_db($con,'bank');
?>