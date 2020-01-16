<?php
$connection = mysqli_connect("localhost","root","");
if($connection){
echo "Connected to mysql successfully<br>";
$db=mysqli_select_db($connection,"mydb");
if($db){
echo "Successfully selected mydb<br>";
$rollno=$_POST['rollno']
$query="INSERT INTO student(rollno,name,mobile,email,dob,dept,gender,lang)VALUES('$rollno',''))";
$result=mysqli_query($connection,$query);
if($result){
echo "Student table created successfully";
}else{
echo "Table creation failed".mysqli_error();
}

}else{
echo "Unable to select mydb";
}
}else{
echo "unable to connect";
}
?>