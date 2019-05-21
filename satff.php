<?php

	$a=$_GET['d'];
	$b=$_GET['y'];
	$c=$_GET['p'];
        $d=$_GET['n'];
	$e=$_GET['s'];
        $f=$_GET['o'];
        $g=$_GET['date'];
	$h=$_GET['time'];

 include 'db1.php';
if(mysqli_query($c,"insert into satff values('','$a',$b,'$c',$d,'$e','$f','$g','$h')"))
echo "suceesfuly inserted";
else
echo "Not inserted";

?>