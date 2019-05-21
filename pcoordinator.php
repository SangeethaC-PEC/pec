<html lang="en">
<head>
  <title>View activities</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="css.css" rel="stylesheet" type="text/css"></link> 
</head>
<body>

<div class="container">
  <h2>EVENTS</h2>
              
  <table class="table table-striped">
    <thead>
      <tr>
        <th>event id</th>
        <th>Guest Name</th>
	<th>designation</th>
        <th>Organisation adress</th>
	<th>Guest No</th>
	<th>Guest Email</th>
  <th>Guest Profile</th>
      </tr>
    </thead>
    <tbody>
      <tr>

<?php

session_start();
$id=$_GET['id'];
$_SESSION['id']=$id;

 include 'db.php';
$r=mysqli_query($c,"select * from g_detail where event_id='$id' ");


while ($row=mysqli_fetch_row($r))
{
echo "<td>".$row[0]."</td>";
echo "<td>".$row[1]." </td>";
echo "<td> ".$row[2]."</td>";
echo "<td> ".$row[3]."</td>";
echo "<td> ".$row[4]."</td>";
echo "<td> ".$row[5]."</td>";
echo "<td> ".$row[6]."</td>";
echo  "</tr>";
}

?>
  </tbody>
  </table>

<br><br>
  <h2>Momento</h2>
              
  <table class="table table-striped">
    <thead>
      <tr>
        
        <th>No of gifts</th>
  <th>Total price</th>
      </tr>
    </thead>
    <tbody>
      <tr>

<?php


 include 'db.php';
$r=mysqli_query($c,"select * from momento where event_id='$id' ");


while ($row=mysqli_fetch_row($r))
{

echo "<td>".$row[1]." </td>";
echo "<td> ".$row[2]."</td>";
echo  "</tr>";
}

?>
  </tbody>
  </table>



  <br><br>
  <h2>Whatsapp</h2>
              
  <table class="table table-striped">
    <thead>
      <tr>
        
        <th>Pre event</th>
  <th>on event</th>
        <th>post event</th>
      </tr>
    </thead>
    <tbody>
      <tr>

<?php


 include 'db.php';
$r=mysqli_query($c,"select * from whatsapp where event_id='$id' ");


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

  <br><br>
  <h2>Facebook</h2>
              
  <table class="table table-striped">
    <thead>
      <tr>
        
        <th>Pre event</th>
  <th>on event</th>
        <th>post event</th>
      </tr>
    </thead>
    <tbody>
      <tr>

<?php


 include 'db.php';
$r=mysqli_query($c,"select * from facebook where event_id='$id' ");


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

  <br><br>
  <h2>Mail</h2>
              
  <table class="table table-striped">
    <thead>
      <tr>
        
        <th>Pre event</th>
  <th>on event</th>
        <th>post event</th>
      </tr>
    </thead>
    <tbody>
      <tr>

<?php



 include 'db.php';
$r=mysqli_query($c,"select * from mail where event_id='$id' ");


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


  <br><br>
  <h2>Engagement</h2>
              
  <table class="table table-striped">
    <thead>
      <tr>
        
        <th>Pre event</th>
  <th>on event</th>
  <th>post event</th>
      </tr>
    </thead>
    <tbody>
      <tr>

<?php

 include 'db.php';
$r=mysqli_query($c,"select * from engagement where event_id='$id' ");


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

  <form action="papprove.php">
 <h2>Approve</h2>
 <input type="submit" name="sub" value="approve">
 
</form>
</div>
