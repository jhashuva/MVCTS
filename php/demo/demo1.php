<?php
$file=fopen("demo.txt","w");
   $s_details=array();
   $s_details1=array();
	$rollno=$_POST['rollno'];
	$name=$_POST['name'];
	$gender=$_POST['gender'];
	$mobile=$_POST['mobile'];
	$lang=$_POST['lang'];
	#$lan=$_POST[la];
	#echo $lan;

	$s_details1["rollno"]=$rollno;
	$s_details1["name"]=$name;
	$s_details1["gender"]=$gender;
	$s_details1["mobile"]=$mobile;
	$s_details1["language"]=$lang;
	foreach($s_details1 as $k=>$v){
		echo $k." ".$v."<br>";
		fwrite($file, sha5("$k.' '.$v.\n"));
	}
?>

	