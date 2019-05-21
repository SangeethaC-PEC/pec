 <?php
session_start();

$pr1=$_POST['pr1'];
$o1=$_POST['o1'];
$po1=$_POST['po1'];
$a1=$_POST['a1'];

$pr2=$_POST['pr2'];
$o2=$_POST['o2'];
$po2=$_POST['po2'];
$a2=$_POST['a2'];

$pr3=$_POST['pr3'];
$o3=$_POST['o3'];
$po3=$_POST['po3'];
$a3=$_POST['a3'];

$pr4=$_POST['pr4'];
$o4=$_POST['o4'];
$po4=$_POST['po4'];
$a4=$_POST['a4'];

$id=$_SESSION['id'];

$yes="yes";
 include 'db.php';
	if($a1!="all")
		mysqli_query($c,"INSERT INTO facebook values('$id','$pr1','$o1','$po1','no')");    
	else 
		mysqli_query($c,"INSERT INTO facebook values('$id','$yes','$yes','$yes','no')");

	if($a2!="all")
		mysqli_query($c,"INSERT INTO whatsapp values('$id','$pr2','$o2','$po2','no')");    
	else 
		mysqli_query($c,"INSERT INTO whatsapp values('$id','$yes','$yes','$yes','no')");

	if($a3!="all")
		mysqli_query($c,"INSERT INTO engagement values('$id','$pr3','$o3','$po3','no')");    
	else 
		mysqli_query($c,"INSERT INTO engagement values('$id','$yes','$yes','$yes','no')");

	if($a4!="all")
		mysqli_query($c,"INSERT INTO mail values('$id','$pr4','$o4','$po4','no')");    
	else 
		$r=mysqli_query($c,"INSERT INTO mail values('$id','$yes','$yes','$yes','no')");


	header("Location:AllView.html");

?>