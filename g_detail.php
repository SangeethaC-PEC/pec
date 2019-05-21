 <?php
session_start();


$name=$_GET['n'];
$desg=$_GET['d'];
$on=$_GET['on'];
$oadd=$_GET['oadd'];
$gc=$_GET['gc'];
$ge=$_GET['ge'];
$id=$_SESSION['id'];

 include 'db.php';

echo count ($name);

for($i=0;$i<count($name);$i++) 
{
    
$r=mysqli_query($c,"INSERT INTO g_detail values('$id','$name[$i]','$desg[$i]','$on[$i]','$oadd[$i]','$gc[$i]','$ge[$i]')");

    

    
    
}

		
header("Location:momento.html");

?>