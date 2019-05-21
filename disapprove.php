 <?php
 session_start();
 $id=$_SESSION['id'];
 include 'db.php';
$r=mysqli_query($c,"UPDATE `event` SET `approve`='no' WHERE event_id='$id'");
header("Location:AllViewedit.html");


 ?>