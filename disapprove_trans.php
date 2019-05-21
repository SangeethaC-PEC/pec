 <?php
 session_start();
$id=$_SESSION['id'];
 include 'db.php';
$r=mysqli_query($c,"UPDATE `event` SET `tapprove`='no' WHERE event_id='$id'");
$r=mysqli_query($c,"UPDATE `transport` SET `approve`='no' WHERE event_id='$id'");
header("Location:view.html");

 ?>