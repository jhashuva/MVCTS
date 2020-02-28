<?php
$file=fopen("demo.txt",'w');
$student_details=array();
$student_details["Roll Number"]=$_POST['Roll_Number'];
$student_details["Full Name"]=$_POST['Name'];
$student_details["Gender"]=$_POST['Gender'];
$student_details["Date of Birth"]=$_POST['dob'];

foreach($student_details as $k=>$v){
echo $k." ".$v."<br>";
fwrite($file,"$k-$v\n");
}

fclose($file);
?>