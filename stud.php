<?php

	$a=$_GET['d'];
	$b=$_GET['y'];
	$c=$_GET['e'];
        $d=$_GET['a'];
	$e=$_GET['o'];
        $f=$_GET['date'];
	$g=$_GET['time'];

 include 'db1.php';
if(mysqli_query($c,"insert into stu values('','$a',$b,'$c',$d,'$e','$f','$g')"))
echo "suceesfuly inserted";
else
echo "Not inserted";

?>