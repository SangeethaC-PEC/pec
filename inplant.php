<?php

	$b=$_GET['d'];
	$c=$_GET['n'];
	$d=$_GET['o'];
	$date=$_GET['date'];

include 'db1.php';
if(mysqli_query($c,"insert into inplant values('','$b','$c','$d','$date')"))
echo "suceesfuly inserted";
else
echo "Not inserted";

?>