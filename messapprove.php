<html lang="en">
<head>
  <title>Mess</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="css.css" rel="stylesheet" type="text/css"></link> 
</head>
<body>

<div class="container">
  <h2>Mess details</h2>
              
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Breakfast</th>
        <th>Lunch</th>
	<th>Dinner</th>
 
      </tr>
    </thead>
    <tbody>
      <tr>

<?php

session_start();
$id=$_GET['id'];
$_SESSION['id']=$id;
 include 'db.php';
$r=mysqli_query($c,"select * from mess where event_id='$id' ");


while ($row=mysqli_fetch_row($r))
{

echo "<td>".$row[1]." </td>";
echo "<td> ".$row[2]."</td>";
echo "<td> ".$row[3]."</td>";
echo  "</tr>";
}

?>
  </tbody>
  </table>


<h2>Breakfast</h2>
              
  <table class="table table-striped">
    <thead>
      <tr>
        
        <th>Venue</th>
        <th>Quantity</th>
        <th>Time</th>
      </tr>
    </thead>
    <tbody>
      <tr>

<?php


$id=$_SESSION['id'];

 include 'db.php';
$r=mysqli_query($c,"select * from breakfast where event_id='$id' ");


while ($row=mysqli_fetch_row($r))
{

echo "<td>".$row[1]." </td>";
echo "<td> ".$row[2]."</td>";
echo "<td> ".$row[2]."</td>";
echo  "</tr>";
}
?>
  </tbody>
  </table>




<h2>Lunch</h2>
              
  <table class="table table-striped">
    <thead>
      <tr>
        
        <th>Venue</th>
  <th>Quantity</th>
  <th>Time</th>
      </tr>
    </thead>
    <tbody>
      <tr>

<?php


$id=$_SESSION['id'];
 include 'db.php';
$r=mysqli_query($c,"select * from lunch where event_id='$id' ");


while ($row=mysqli_fetch_row($r))
{
echo "<td>".$row[1]." </td>";
echo "<td> ".$row[2]."</td>";
echo "<td> ".$row[3]."</td>";
echo  "</tr>";
}
?>
  </tbody>
  </table>


  <h2>Dinner</h2>
              
  <table class="table table-striped">
    <thead>
      <tr>
        
        <th>Venue</th>
  <th>Quantity</th>
  <th>Time</th>
      </tr>
    </thead>
    <tbody>
      <tr>

<?php


$id=$_SESSION['id'];

 include 'db.php';
$r=mysqli_query($c,"select * from dinner where event_id='$id' ");


while ($row=mysqli_fetch_row($r))
{

echo "<td>".$row[1]." </td>";
echo "<td> ".$row[2]."</td>";
echo "<td> ".$row[3]."</td>";
echo  "</tr>";
}
?>

  </tbody>
  </table>


  <h2>Refreshment</h2>
              
  <table class="table table-striped">
    <thead>
      <tr>
        
        <th>Venue</th>
  <th>Quantity</th>
  <th>Time</th>
      </tr>
    </thead>
    <tbody>
      <tr>

<?php


$id=$_SESSION['id'];

 include 'db.php';
$r=mysqli_query($c,"select * from refreshment where event_id='$id' ");


while ($row=mysqli_fetch_row($r))
{

echo "<td>".$row[1]." </td>";
echo "<td> ".$row[2]."</td>";
echo "<td> ".$row[3]."</td>";
echo  "</tr>";
}
?>

  </tbody>
  </table>



  <form action="approve_mess.php">
  <h2>Approve</h2>
  <input type="submit" name="sub" value="approve">
 
</form>
</div>
