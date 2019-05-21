 <?php
 session_start();
$id=$_SESSION['id'];
 include 'db.php';
$r=mysqli_query($c,"UPDATE `event` SET `tapprove`='yes' WHERE event_id='$id'");
$r=mysqli_query($c,"UPDATE `transport` SET `approve`='yes' WHERE event_id='$id'");
header("Location:view.html");

 ?>