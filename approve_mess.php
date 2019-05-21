 <?php
 include 'db.php';
 session_start();
$id=$_SESSION['id'];
$r=mysqli_query($c,"UPDATE `breakfast` SET `approve`='yes' WHERE event_id='$id'");
$r=mysqli_query($c,"UPDATE `lunch` SET `approve`='yes' WHERE event_id='$id'");
$r=mysqli_query($c,"UPDATE `dinner` SET `approve`='yes' WHERE event_id='$id'");
$r=mysqli_query($c,"UPDATE `event` SET `mapprove`='yes' WHERE event_id='$id'");
$r=mysqli_query($c,"UPDATE `mess` SET `approve`='yes' WHERE event_id='$id'");
header("Location:view.html");

 ?>