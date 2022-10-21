<?php

$con = mysqli_connect('localhost','root','','login');

if(!$con)
{
    die('Not connect'.mysqli_connect_error());
}