<?php

	$a=$_GET['n'];
	$b=$_GET['m'];
	$d=$_GET['date'];

 include 'db1.php';
if(mysqli_query($c,"insert into hr values('','$a','$b','$d')"))
echo "suceesfuly inserted";
else
echo "Not inserted";

?>