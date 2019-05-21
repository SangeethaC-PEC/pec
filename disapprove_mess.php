 <?php
 session_start();
 $id=$_SESSION['id'];
 include 'db.php';
$r=mysqli_query($c,"UPDATE `breakfast` SET `approve`='no' WHERE event_id='$id'");
$r=mysqli_query($c,"UPDATE `lunch` SET `approve`='no' WHERE event_id='$id'");
$r=mysqli_query($c,"UPDATE `dinner` SET `approve`='no' WHERE event_id='$id'");
$r=mysqli_query($c,"UPDATE `event` SET `mapprove`='no' WHERE event_id='$id'");
$r=mysqli_query($c,"UPDATE `mess` SET `approve`='no' WHERE event_id='$id'");
header("Location:view.html");


 ?>