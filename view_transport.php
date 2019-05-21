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
<h2>Unapproved</h2>              
  <table class="table table-striped">
    <thead>
      <tr>
        <th>event id</th>
        <th>Dept</th>
	<th>event</th>
        <th>club</th>
	<th>Date</th>
	<th>Time</th>
  <th>no of guest</th>
  <th>coordinator name</th>
  <th>coordinator number</th>
      </tr>
    </thead>
    <tbody>
      <tr>

<?php

 include 'db.php';
$r=mysqli_query($c,"select * from event where tapprove='no' and papprove='yes'");


while ($row=mysqli_fetch_row($r))
{
echo "<td>".'<a href="transapprove.php?id='.$row[0].'">'.$row[0].'</a>'."</td>";
echo "<td>".$row[1]." </td>";
echo "<td> ".$row[2]."</td>";
echo "<td> ".$row[3]."</td>";
echo "<td> ".$row[4]."</td>";
echo "<td> ".$row[5]."</td>";
echo "<td> ".$row[6]."</td>";
echo "<td> ".$row[7]."</td>";
echo "<td> ".$row[8]."</td>";
echo  "</tr>";
}
?>
      
    </tbody>
  </table>
  <h2>Approved</h2>              
  <table class="table table-striped">
    <thead>
      <tr>
        <th>event id</th>
        <th>Dept</th>
  <th>event</th>
        <th>club</th>
  <th>Date</th>
  <th>Time</th>
  <th>no of guest</th>
  <th>coordinator name</th>
  <th>coordinator number</th>
      </tr>
    </thead>
    <tbody>
      <tr>

<?php

 include 'db.php';
$r=mysqli_query($c,"select * from event where tapprove='yes' ");


while ($row=mysqli_fetch_row($r))
{
echo "<td>".'<a href="transdisapprove.php?id='.$row[0].'">'.$row[0].'</a>'."</td>";
echo "<td>".$row[1]." </td>";
echo "<td> ".$row[2]."</td>";
echo "<td> ".$row[3]."</td>";
echo "<td> ".$row[4]."</td>";
echo "<td> ".$row[5]."</td>";
echo "<td> ".$row[6]."</td>";
echo "<td> ".$row[7]."</td>";
echo "<td> ".$row[8]."</td>";
echo  "</tr>";
}
?>
      
    </tbody>
  </table>
</div>
