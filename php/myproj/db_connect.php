<?php
$connection = mysqli_connect("localhost","root","");
if(!$connection){
die('could  not connect'.mysqli_error());
}else{
echo "connected to mysql successfully <br>";
$db =  mysqli_select_db($connection,"mydatabase");
if(!$db){
    echo "sorry database could not find<br>";
}else{
echo "database connected succesfully";
}
}
mysqli_close($connection);
?>