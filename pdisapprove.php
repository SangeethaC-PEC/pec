 <?php
 session_start();
 $id=$_SESSION['id'];
 include 'db.php';
$r=mysqli_query($c,"UPDATE `event` SET `papprove`='no' WHERE event_id='$id'");
$r=mysqli_query($c,"UPDATE `event` SET `mapprove`='no' WHERE event_id='$id'");
$r=mysqli_query($c,"UPDATE `event` SET `tapprove`='no' WHERE event_id='$id'");
$r=mysqli_query($c,"UPDATE `transport` SET `approve`='no' WHERE event_id='$id'");

$r=mysqli_query($c,"UPDATE `breakfast` SET `approve`='no' WHERE event_id='$id'");
$r=mysqli_query($c,"UPDATE `lunch` SET `approve`='no' WHERE event_id='$id'");
$r=mysqli_query($c,"UPDATE `dinner` SET `approve`='no' WHERE event_id='$id'");
$r=mysqli_query($c,"UPDATE `refreshment` SET `approve`='no' WHERE event_id='$id'");
$r=mysqli_query($c,"UPDATE `mess` SET `approve`='no' WHERE event_id='$id'");

$r=mysqli_query($c,"UPDATE `momento` SET `papprove`='yes' WHERE event_id='$id'");
$r=mysqli_query($c,"UPDATE `whatsapp` SET `papprove`='yes' WHERE event_id='$id'");
$r=mysqli_query($c,"UPDATE `facebook` SET `papprove`='yes' WHERE event_id='$id'");
$r=mysqli_query($c,"UPDATE `mail` SET `papprove`='yes' WHERE event_id='$id'");
$r=mysqli_query($c,"UPDATE `engagement` SET `papprove`='yes' WHERE event_id='$id'");
header("Location:view.html");


 ?>