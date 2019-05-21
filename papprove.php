 <?php
 session_start();
 $id=$_SESSION['id'];
 include 'db.php';
$r=mysqli_query($c,"UPDATE `event` SET `papprove`='yes' WHERE event_id='$id'");
$r=mysqli_query($c,"UPDATE `momento` SET `papprove`='yes' WHERE event_id='$id'");
$r=mysqli_query($c,"UPDATE `whatsapp` SET `papprove`='yes' WHERE event_id='$id'");
$r=mysqli_query($c,"UPDATE `facebook` SET `papprove`='yes' WHERE event_id='$id'");
$r=mysqli_query($c,"UPDATE `mail` SET `papprove`='yes' WHERE event_id='$id'");
$r=mysqli_query($c,"UPDATE `engagement` SET `papprove`='yes' WHERE event_id='$id'");
header("Location:view.html");


 ?>