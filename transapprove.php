<html lang="en">
<head>
  <title>Transport</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="css.css" rel="stylesheet" type="text/css"></link> 
</head>
<body>

<div class="container">
  <h2>Transport Details</h2>
              
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Event id</th>
        <th>No of guest</th>
 
      </tr>
    </thead>
    <tbody>
      <tr>

<?php

session_start();
$id=$_GET['id'];
$_SESSION['id']=$id;

 include 'db.php';
$r=mysqli_query($c,"select * from guest where event_id='$id' ");


while ($row=mysqli_fetch_row($r))
{

echo "<td>".$row[0]." </td>";
echo "<td> ".$row[1]."</td>";
echo  "</tr>";
}

?>
  </tbody>
  </table>


<h2>Pick up and Drop</h2>
              
  <table class="table table-striped">
    <thead>
      <tr>
        
        <th>Event Id</th>
        <th>Pick up</th>
        <th>Drop</th>
        <th>Pick up time</th>
        <th>Drop up time</th>
        <th>guest name</th>
        <th>Guest number</th>
        <th>guest email</th>
        <th>Faculty incharge</th>
        <th>Incharge numeber</th>
      </tr>
    </thead>
    <tbody>
      <tr>

<?php


$id=$_GET['id'];

 include 'db.php';
$r=mysqli_query($c,"select * from transport where event_id='$id' ");


while ($row=mysqli_fetch_row($r))
{
echo "<td>".$row[0]." </td>";
echo "<td>".$row[1]." </td>";
echo "<td> ".$row[2]."</td>";
echo "<td> ".$row[3]."</td>";
echo "<td> ".$row[4]."</td>";
echo "<td> ".$row[5]."</td>";
echo "<td> ".$row[6]."</td>";
echo "<td> ".$row[7]."</td>";
echo "<td> ".$row[8]."</td>";
echo "<td> ".$row[9]."</td>";
echo  "</tr>";
}
?>
  </tbody>
  </table>







  <form action="approve_trans.php">
  <h2>Approve</h2>
  <input type="submit" name="sub" value="approve">
 
</form>
</div>
