<html>
<?php
$theme="";
if ($_SERVER["REQUEST_METHOD"]=="POST"){
	if(empty($_POST["theme"])){
		$theme="Need to choose one";
	}else{
		if($_POST["theme"]=="dark"){
			echo "<body style='background-color:black;'>
			<h1 style='color:white;'>Welcome to dark mode</h1>
			<font color='white'>
			<p align='justify'> PHP stands for Hypertext Preprocessor (no, the acronym doesn't follow the name). It's an open source, server-side, scripting language used for the development of web applications. ... On the other hand, with PHP server-side scripting language, it's executed on the server before it gets to the web browser of the user.</p>
			<p align='justify'>
			PHP is a general-purpose programming language originally designed for web development. It was originally created by Rasmus Lerdorf in 1994; the PHP reference implementation is now produced by The PHP Group.</p> </font>";
		}else{
			echo "<body>
			<h1 >Welcome to light mode</h1>
			<p> PHP stands for Hypertext Preprocessor (no, the acronym doesn't follow the name). It's an open source, server-side, scripting language used for the development of web applications. ... On the other hand, with PHP server-side scripting language, it's executed on the server before it gets to the web browser of the user.</p>
			<p>
			PHP is a general-purpose programming language originally designed for web development. It was originally created by Rasmus Lerdorf in 1994; the PHP reference implementation is now produced by The PHP Group.</p>";
		}
	}
}
 ?>
	<form method="post" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
		<select name="theme">
			<option value="light">light</option>
			<option value="dark">dark</option>
		</select>
		<input type="submit" value="choose theme">
</html>