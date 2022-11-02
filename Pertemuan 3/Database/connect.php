<?php
$connection = mysqli_connect("localhost", "root", "", "project1");
if(!$connection) {
    die("Connection Failed : " . mysqli_connect_error());
}   echo "Connected Succesfully";
mysqli_close($connection);
?>