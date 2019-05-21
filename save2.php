
<?php include 'AllViewedit1.html';?>
<?php

	$a=$_GET['d'];
	$b=$_GET['y'];
	$ci=$_GET['a'];
	$d=$_GET['date'];
	$e=$_GET['time'];


 include 'db1.php';
if(mysqli_query($c,"insert into ca values('','$a',$b,'$ci','$d','$e')"))
echo "suceesfuly inserted";
else
echo "Not inserted";


?>