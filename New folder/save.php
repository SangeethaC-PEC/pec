<?php

	$a=$_GET['d'];
	$c=$_GET['y'];
	$b=$_GET['m'];
	$d=$_GET['date'];
	$e=$_GET['time'];


$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,'7');
if(mysqli_query($con,"insert into mis values('','$a','$b','$c','$d','$e')"))
echo "suceesfuly inserted";
else
echo "Not inserted";


?>