<?php
session_start();
$id=$_SESSION['id'];
	 include 'db.php';
	echo "<form>";
	echo "<table border='1'>";
		$n=mysqli_query($c,"select nog from guest where event_id='$id'");
        $r=mysqli_fetch_array($n);
        $cnt=$r['nog'];

		for($i=1;$i<=$cnt;$i++)		{
		echo "<tr><td colspan='2'><b>Enter the Guest $i Details</b></td></tr>";
		echo "<tr><td>Pick Up Address</td><td><input type='text' name='pa[]'></td></tr>";
		echo "<tr><td>Drop down Address</td><td><input type='text' name='da[]'></td></tr>";	
		echo "<tr><td>Pick Up Time</td><td><input type='text' name='pt[]'></td></tr>";
		echo "<tr><td>Drop down Time</td><td><input type='text' name='dt[]'></td></tr>";
		echo "<tr><td>Guest Name</td><td><input type='text' name='gn[]>'></td></tr>";
		echo "<tr><td>Guest Contact No </td><td><input type='text' name='gc[]'></td></tr>";
		echo "<tr><td>Guest Email ID </td><td><input type='text' name='ge[]'></td></tr>";
		echo "<tr><td>Incharge Name </td><td><input type='text' name='in[]'></td></tr>";
		echo "<tr><td>Incharge Contact no</td><td><input type='text' name='inc[]'></td></tr>";
	}
    	echo "<tr><td></td><td><input type='submit' name='s'></td></tr>";
	    echo "</table>";
	    echo "</form>";

if(isset($_GET['s']))
{
	 include 'db.php';
$pa=$_GET['pa'];
$da=$_GET['da'];
$pt=$_GET['pt'];
$dt=$_GET['dt'];
$gn=$_GET['gn'];
$gc=$_GET['gc'];
$ge=$_GET['ge'];
$in=$_GET['in'];
$inc=$_GET['inc'];

		for ($i=0; $i<$cnt ; $i++) { 
			mysqli_query($c,"INSERT INTO transport values('$id','$pa[$i]','$da[$i]','$pt[$i]','$dt[$i]','$gn[$i]','$gc[$i]','$ge[$i]','$in[$i]','$inc[$i]','no')");
		}
		header("Location:media-content.html");
	    }
?>