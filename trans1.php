<form>
	Enter Number of Guest<input type="text" name="c">
    <input type="submit" name="su1">
</form>

<?php
session_start();
$id=$_SESSION['id'];

if(isset($_GET['su1']))
{

	$cnt=$_GET['c'];
	
 include 'db.php';
			
	mysqli_query($c,"INSERT INTO `guest`(`event_id`,`nog`) values ('$id','$cnt')");
	
	echo "<form action='g_detail.php'>";
	echo "<table border='1'>";
	for($i=1;$i<=$cnt;$i++)
	{
		
		echo "<tr><td colspan='2'><b>Enter the Guest $i Details</b></td></tr>";
		echo "<tr><td>Guest Name</td><td><input type='text' name='n[]'></td></tr>";
		echo "<tr><td>Guset Deg</td><td><input type='text' name='d[]'></td></tr>";	
		echo "<tr><td>Organization Name</td><td><input type='text' name='on[]'></td></tr>";
		echo "<tr><td>ORg Add</td><td><input type='text' name='oadd[]>'></td></tr>";
		echo "<tr><td>Contact </td><td><input type='text' name='gc[]'></td></tr>";
		echo "<tr><td>Email </td><td><input type='text' name='ge[]'></td></tr>";
		
	}
	echo "<tr><td></td><td><input type='submit'></td></tr>";
	echo "</table>";
	echo "</form>";
}
			
				

?>
