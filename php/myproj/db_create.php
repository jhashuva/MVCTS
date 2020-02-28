<?php
$connection = mysqli_connect("localhost","root","");
if(!$connection){
die('could  not connect'.mysqli_error());
}else{
echo "connected to mysql successfully <br>";
$query = mysqli_query($connection,"CREATE DATABASE mydatabase");
if(!$query){
    echo "sorry database could not created<br>";
}else{
echo "database created succesfully";
}
}
mysqli_close($connection);
?>