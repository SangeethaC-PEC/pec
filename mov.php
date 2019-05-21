<?php
session_start();

$q=$_POST['qu'];
$c=$_POST['no'];
$id=$_SESSION['id'];

 include 'db.php';



mysqli_query($c,"INSERT INTO momento values('$id','$q','$c','no')");


	header("Location:mess.html");

		
?>