<?php
$file=fopen("demo.txt","w");
   $s_details=array();
   $s_details1=array();
	$rollno=$_POST['rollno'];
	$name=$_POST['name'];
	$gender=$_POST['gender'];
	$mobile=$_POST['mobile'];
	$lang=$_POST['lang'];
	$email=$_POST['email'];
	$dept=$_POST['dept'];
	$dob=$_POST['dob'];
	#$lan=$_POST[la];
	#echo $lan;
$connection = mysqli_connect("localhost","root","");
if(!$connection){
die('could  not connect'.mysqli_error());
}else{
echo "connected to mysql successfully <br>";
$db = mysqli_select_db($connection,"mydatabase");
if(!$db){
    echo "database could not be connected";
}else{
$query = mysqli_query($connection,"INSERT INTO student (rollno, name, dept,email, dob, lang, gender, mobile) VALUES('$rollno','$name','$dept','$email','$dob','$lang','$gender','$mobile')");
if(!$query){
    echo "Unable to insert details";
}else{
echo "data inserted ";
}
}
}
$sql = "SELECT * FROM student";
if($result=mysqli_query($connection,$sql)){
	if(mysqli_num_rows($result) > 0){
        echo "<table border='1 px'>";
            echo "<tr>";
                echo "<th>Roll Number</th>";
                echo "<th>Name</th>";
                echo "<th>Department</th>";
                echo "<th>Email</th>";
                echo "<th>Date of Birth</th>";
                echo "<th>Languages</th>";
                echo "<th>Gender</th>";
                echo "<th>Mobile Number</th>";
            echo "</tr>";
            while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['rollno'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['dept'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                #echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['dob'] . "</td>";
                echo "<td>" . $row['lang'] . "</td>";
                echo "<td>" . $row['gender'] . "</td>";
                echo "<td>" . $row['mobile'] . "</td>";

            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
mysqli_close($connection);

	/*$s_details1["rollno"]=$rollno;
	$s_details1["name"]=$name;
	$s_details1["gender"]=$gender;
	$s_details1["mobile"]=$mobile;
	$s_details1["language"]=$lang;
	foreach($s_details1 as $k=>$v){
		echo $k." ".$v."<br>";
		fwrite($file, sha5("$k.' '.$v.\n"));
	}*/
?>

	