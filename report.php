
<?php 

session_start();

if($_SESSION["lu"]) {
?>



<html lang="en">
<head>
  <title>View activities</title>
	<style>
  <style>



</style>

</style>

  
</head>
<body>
<?php include 'AllViewedit1.html';?>

<div>
<form method="get">

		     
<input type="submit" value="Select Date">
<input type="date" id="usr" name="date" /></br></br>

<input type="submit" name="sub" value="Submit" /></br>
</div>
	</form>


<div class="container">
  <h2>ACTIVITIES ORGANIZED</h2>
              
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Sino</th>
        <th>Dept</th>
	<th>year</th>
        <th>activities</th>
	<th>Date</th>
	<th>Time</th>
      </tr>
    </thead>
    <tbody>
    <tr>
  
<?php

$cnt=0;
if(isset($_GET['sub']))
	{

$u=$_GET['date'];
 include 'db1.php';
$r=mysqli_query($c,"select * from act1 where date='$u'");

while ($row=mysqli_fetch_row($r))
{

echo "<td>".$row[0]."</td>";
echo "<td>".$row[1]."</td>";
echo "<td>".$row[2]."</td>";
echo "<td>".$row[3]."</td>";
echo "<td>".$row[4]."</td>";
echo "<td>".$row[5]."</td>";
echo "</tr>";
$cnt++;
}
}
?>
</TABLE>
</div>
    


<div class="container">
  <h2> CENTRALIZED ACTIVITIES </h2>
              
  <table class="table table-striped">
    <thead>
      <tr>
        <th>sno</th>
        <th>Dept</th>
	<th>year</th>
        <th>activities</th>
	<th>Date</th>
	<th>Time</th>
      </tr>
    </thead>
    <tbody>
      <tr>
<?php


if(isset($_GET['sub']))
	{

$u=$_GET['date'];
 include 'db1.php';
$r=mysqli_query($c,"select * from ca where date='$u'");

while ($row=mysqli_fetch_row($r))
{
echo "<td>".$row[0]."</td>";
echo "<td>".$row[1]." </td>";
echo "<td>".$row[2]."</td>";
echo "<td> ".$row[3]."</td>";
echo "<td> ".$row[4]."</td>";
echo "<td> ".$row[5]."</td>";
echo  "</tr>";
$cnt++;
}
}
?>
</TABLE>
 </div>

<div class="container">
  <h2>HOD MEETINGS</h2>
              
  <table class="table table-striped">
    <thead>
      <tr>
        <th>hid</th>
        <th>Dept</th>
	<th>year</th>
        <th>meeting scheduled for principal with management</th>
	<th>Date</th>
	<th>Time</th>
      </tr>
    </thead>
    <tbody>
    <tr>
   
<?php


if(isset($_GET['sub']))
	{

$u=$_GET['date'];
 include 'db1.php';
$r=mysqli_query($c,"select * from hod where date='$u'");

while ($row=mysqli_fetch_row($r))
{
echo "<td>".$row[0]."</td>";
echo "<td>".$row[1]."</td>";
echo "<td>".$row[2]."</td>";
echo "<td>".$row[3]."</td>";
echo "<td>".$row[4]."</td>";
echo "<td>".$row[5]."</td>";
echo "</tr>";
$cnt++;
}
}
?>

</TABLE>
</div>

<div class="container">
  <h2>HR MEETINGS</h2>
              
  <table class="table table-striped">
    <thead>
      <tr>
        <th>hrid</th>
        <th>name of the hp</th>
	<th>organization</th>
        
      </tr>
    </thead>
    <tbody>
    <tr>
   
<?php


if(isset($_GET['sub']))
	{

$u=$_GET['date'];
 include 'db1.php';
$r=mysqli_query($c,"select * from hr where date='$u'");

while ($row=mysqli_fetch_row($r))
{
echo "<td>".$row[0]."</td>";
echo "<td>".$row[1]."</td>";
echo "<td>".$row[2]."</td>";
echo "</tr>";
$cnt++;
}
}
?>

</TABLE>
</div>

<div class="container">
  <h2>INDUSTRIAL VISIT</h2>
              
  <table class="table table-striped">
    <thead>
      <tr>
        <th>iid</th>
        <th>Dept</th>
	<th>year</th>
        <th>no of students</th>
	<th>organization</th>
	<th>staff incharge</th>
<th>time</th>
      </tr>
    </thead>
    <tbody>
    <tr>
   
<?php


if(isset($_GET['sub']))
	{

$u=$_GET['date'];
 include 'db1.php';
$r=mysqli_query($c,"select * from ind where date='$u'");

while ($row=mysqli_fetch_row($r))
{
echo "<td>".$row[0]."</td>";
echo "<td>".$row[1]."</td>";
echo "<td>".$row[2]."</td>";
echo "<td>".$row[3]."</td>";
echo "<td>".$row[4]."</td>";
echo "<td>".$row[5]."</td>";
echo "<td>".$row[6]."</td>";
echo "</tr>";
$cnt++;
}
}
?>

</TABLE>
</div>

<div class="container">
  <h2>IMPLANT TRAINING</h2>
              
  <table class="table table-striped">
    <thead>
      <tr>
        <th>iid</th>
        <th>Dept</th>
	<th>no of students</th>    
	<th>organization</th>
	
      </tr>
    </thead>
    <tbody>
    <tr>
   
<?php


if(isset($_GET['sub']))
	{

$u=$_GET['date'];
 include 'db1.php';
$r=mysqli_query($c,"select * from inplant where date='$u'");

while ($row=mysqli_fetch_row($r))
{
echo "<td>".$row[0]."</td>";
echo "<td>".$row[1]."</td>";
echo "<td>".$row[2]."</td>";
echo "<td>".$row[3]."</td>";

echo "</tr>";
$cnt++;
}
}
?>

</TABLE>
</div>

<div class="container">
  <h2>PLACEMENT TRAINING</h2>
              
  <table class="table table-striped">
    <thead>
      <tr>
        <th>pid</th>
        <th>Dept</th>
	      <th>year</th>
        <th>placements</th>
	      <th>Date</th>
	      <th>Time</th>
      </tr>
    </thead>
    <tbody>
    <tr>

<?php

if(isset($_GET['sub']))
{
$u=$_GET['date'];
 include 'db1.php';
$r=mysqli_query($c,"select * from pt where date='$u'");

while ($row=mysqli_fetch_row($r))
{
echo "<td>".$row[0]."</td>";
echo "<td>".$row[1]."</td>";
echo "<td>".$row[2]."</td>";
echo "<td>".$row[3]."</td>";
echo "<td>".$row[4]."</td>";
echo "<td>".$row[5]."</td>";
echo "</tr>";
$cnt++;
}
}
?>

</TABLE>
</div>

<div class="container">
  <h2>STAFF MEETINGS</h2>
              
  <table class="table table-striped">
    <thead>
      <tr>
        <th>stfid</th>
        <th>Dept</th>
	<th>year</th>
        <th>name of the programme</th>
	<th>no of the staff</th>
	<th>name of the staff</th>
<th>name of the organization</th>
	<th>date</th>
	<th>time</th>
      </tr>
    </thead>
    <tbody>
    <tr>

<?php


if(isset($_GET['sub']))
	{

$u=$_GET['date'];
 include 'db1.php';
$r=mysqli_query($c,"select * from satff where date='$u'");

while ($row=mysqli_fetch_row($r))
{
echo "<td>".$row[0]."</td>";
echo "<td>".$row[1]."</td>";
echo "<td>".$row[2]."</td>";
echo "<td>".$row[3]."</td>";
echo "<td>".$row[4]."</td>";
echo "<td>".$row[5]."</td>";
echo "<td>".$row[6]."</td>";
echo "<td>".$row[7]."</td>";
echo "<td>".$row[8]."</td>";
echo "</tr>";
$cnt++;
}
}
?>

</TABLE>
</div>

<div class="container">
  <h2>STUDENT PARTICIPATION</h2>
              
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Stuid</th>
        <th>Dept</th>
	<th>year</th>
        <th>name of the event</th>
	<th>no of students</th>
	<th>name of organization </th>
<th>date</th>
	<th>time</th>
      </tr>
    </thead>
    <tbody>
    <tr>
   <?php


if(isset($_GET['sub']))
	{

$u=$_GET['date'];
 include 'db1.php';
$r=mysqli_query($c,"select * from stu where date='$u'");

while ($row=mysqli_fetch_row($r))
{
echo "<td>".$row[0]."</td>";
echo "<td>".$row[1]."</td>";
echo "<td>".$row[2]."</td>";
echo "<td>".$row[3]."</td>";
echo "<td>".$row[4]."</td>";
echo "<td>".$row[5]."</td>";
echo "<td>".$row[6]."</td>";
echo "<td>".$row[7]."</td>";
echo "</tr>";
$cnt++;
}
}
?>

</TABLE>
</div></form>

<div class="container">
  <h2>TECHNICAL CLUB ACTIVITIES</h2>
              
  <table class="table table-striped">
    <thead>
      <tr>
        <th>event_id</th>
        <th>Dept</th> 
        <th>technical club activity</th>
        <th>club name</th>
	<th>Date</th>
	<th>Time</th>
      </tr>
    </thead>
    <tbody>
    <tr>
  
<?php


if(isset($_GET['sub']))
	{

$u=$_GET['date'];
 include 'db.php';

$r=mysqli_query($c,"select * from event where date='$u'");

while ($row=mysqli_fetch_row($r))
{
echo "<td>".$row[0]."</td>";
echo "<td>".$row[1]."</td>";
echo "<td>".$row[2]."</td>";
echo "<td>".$row[3]."</td>";
echo "<td>".$row[4]."</td>";
echo "<td>".$row[5]."</td>";
echo "</tr>";
$cnt++;
}
}
?>

</TABLE>
</div>

<div class="container">
  <h2>MEETINGS</h2>
              
  <table class="table table-striped">
    <thead>
      <tr>
        <th>sno</th>
        <th>Dept</th>
	<th>year</th>
        <th>meetings</th>
	<th>Date</th>
	<th>Time</th>
      </tr>
    </thead>
    <tbody>
    <tr>
   
<?php


if(isset($_GET['sub']))
	{

$u=$_GET['date'];
 include 'db1.php';
$r=mysqli_query($c,"select * from mis where date='$u'");

while ($row=mysqli_fetch_row($r))
{
echo "<td>".$row[0]."</td>";
echo "<td>".$row[1]."</td>";
echo "<td>".$row[2]."</td>";
echo "<td>".$row[3]."</td>";
echo "<td>".$row[4]."</td>";
echo "<td>".$row[5]."</td>";
echo "</tr>";
$cnt++;
} 
}
?>
</div>

</tr>
    </tbody>
</table>
</div>
</div>
<h1>Total Number of Events Today     
:<?php 
echo 
$cnt;
}
else
header("Location:login.php");

?></h1>

 <input type="submit" name=print value="Print" onClick="window.print()">

</body>
</html>
