<?php

$conn = mysqli_connect('localhost','root','Tarun1@34','IOT');

if(mysqli_connect_errno())
{
    echo 'Database Not connected' . mysqli_connect_errno();
}
?>