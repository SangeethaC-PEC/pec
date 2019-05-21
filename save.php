<?php include 'AllViewedit1.html';?>

<?php

	$a=$_GET['d'];
	$c=$_GET['y'];
	$b=$_GET['m'];
	$d=$_GET['date'];
	$e=$_GET['time'];


 include 'db1.php';
if(mysqli_query($c,"insert into mis values('','$a','$b','$c','$d','$e')"))
echo "suceesfuly inserted";
else
echo "Not inserted";


?>