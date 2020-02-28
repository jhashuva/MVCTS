<?php
$connection = mysqli_connect("localhost","root","");
if($connection){
echo "Connected to mysql successfully";
$db=mysqli_select_db($connection,"mydb");
if($db){
echo "Successfully selected mydb";
}else{
echo "Unable to select mydb";
}
}else{
echo "unable to connect";
}
?>