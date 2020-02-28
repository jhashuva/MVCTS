<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
$file=$size=$type=$tmp_name="";//empty variables
 $file=$_FILES['file']['name'];//name of the file
 $size=$_FILES['file']['size'];//size of the file
 $type=$_FILES['file']['type'];//file type
 $tmp_name=$_FILES['file']['tmp_name'];//giving temporary name
// $error = $_FILES['file']['error'];
 $extension=  strtolower(substr($file,  strpos($file,'.')+1));//
 $max_size = 2097152;
 if(isset($file)){
     if(!empty($file)){
         if(($extension=='jpg'|| $extension=='jpeg')&& $type=='image/jpeg'&&$size<$max_size){
         $location='uploads/';
        if(move_uploaded_file($tmp_name, $location.$file)){
            echo 'uploaded'; 
        // echo 'OK';
     }else{
         echo 'Please choose file name';
     }
     }else{
      echo "file must be in jpeg/jpg and lessthan 2mb";  
     }
 }
 }
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="fileupload.php", method="POST" enctype="multipart/form-data">
            <p> <input type="file" name="file"></p>
            <input type="submit" value="upload">
        </form>
    </body>
</html>
