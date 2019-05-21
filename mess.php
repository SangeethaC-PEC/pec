<?php
session_start();
$b=$_POST['bf'];
$l=$_POST['lf'];
$d=$_POST['df'];
$id=$_SESSION['id'];

 include 'db.php';

if($b=='yes')
	{
		$bv=$_POST['v1'];
		$bq=$_POST['q1'];
		$bt=$_POST['t1'];

		
		mysqli_query($c,"INSERT INTO breakfast values('$id','$bv','$bq','$bt','no')");
	}
if($l=='on')
{
	$lv=$_POST['v2'];
	$lq=$_POST['q2'];
	$lt=$_POST['t2'];
	mysqli_query($c,"INSERT INTO lunch values('$id','$lv','$lq','$lt','no')");

}
if($d=='yes')
{
	$dv=$_POST['v3'];
	$dq=$_POST['q3'];
	$dt=$_POST['t3'];
	mysqli_query($c,"INSERT INTO dinner values('$id','$dv','$dq','$dt','no')");
}



mysqli_query($c,"INSERT INTO mess values('$id','$b','$l','$d','no')");
header("Location:transport.php");
  

?>