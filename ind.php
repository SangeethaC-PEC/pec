<?php

	$a=$_GET['d'];
	$b=$_GET['y'];
	$c=$_GET['a'];
    $d=$_GET['b'];
	$e=$_GET['c'];
	$h=$_GET['time'];
	$d=$_GET['date'];

include 'db1.php';
if(mysqli_query($c,"insert into ind values('','$a','$b','$c','$d','$e','$h','$d')"))
echo "suceesfuly inserted";
else
echo "Not inserted";

?>