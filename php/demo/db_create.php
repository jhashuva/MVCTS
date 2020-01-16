<?php
$connection = mysqli_connect("localhost","root","");
if($connection){
echo "Connected to mysql successfully <br>";
$query="CREATE DATABASE mydb";
$result=mysqli_query($connection,$query);
if($result){
echo "Database created successfully";
}else{
echo "Database creation failed";
}
}else{
echo "unable to connect";
}
?>