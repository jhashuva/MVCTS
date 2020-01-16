<?php
$connection = mysqli_connect("localhost","root","");
if($connection){
echo "Connected to mysql successfully";
}else{
echo "unable to connect";
}
?>