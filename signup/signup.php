<?php

$FirstName =$_POST['FirstName'];
$LastName =$_POST['LastName'];
$MailAddress =$_POST['MailAddress'];
$Password =$_POST['Password'];
$ConfirmPassword =$_POST['ConfirmPassword'];



$con = mysqli_connect('localhost','root','','signup');

if(!$con)
{
   die('connection error'.mysqli_connect_error());
}

$query = "INSERT INTO details (FirstName, LastName, MailAddress, Password, ConfirmPassword) VALUES ('$FirstName', '$LastName', '$MailAddress', '$Password', '$ConfirmPassword')";

$result = mysqli_query($con,$query);

if($result)
{
   

header("Location: file:///C:/Users/gowth/OneDrive/Desktop/login-page%20task/login/index.html");

}
else
{
    echo"error";
}

?>