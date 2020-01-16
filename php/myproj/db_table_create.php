<?php
$connection = mysqli_connect("localhost","root","");
if(!$connection){
die('could  not connect'.mysqli_error());
}else{
echo "connected to mysql successfully <br>";
$db = mysqli_select_db($connection,"mydatabase");
if(!$db){
    echo "database could not be connected";
}else{
$query = mysqli_query($connection,"CREATE TABLE student (rollno VARCHAR(10), name VARCHAR(20), dept VARCHAR(5),email VARCHAR(15), dob DATE, lang VARCHAR(5), gender VARCHAR(2), mobile INT(10), CONSTRAINT student_pk PRIMARY KEY (rollno))");
if(!$query){
    echo "query could not be executed";
}else{
echo "table created";
}
}
}
mysqli_close($connection);
?>