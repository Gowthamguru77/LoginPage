<?php

$Username =$_POST['Username'];
$Password = $_POST['Password'];



$con = mysqli_connect('localhost','root','','login');

if(!$con)
{
   die('connection error'.mysqli_connect_error());
}


$query = "INSERT INTO firstlogin (Username,Password) values ('$Username','$Password')";

$result = mysqli_query($con,$query);

if($result)
{
   echo"success";
}
else
{
    echo"error";
}

?>