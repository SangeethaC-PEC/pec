<html lang="en">
<head>
  <title>View meeting</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link href="css.css" rel="stylesheet" type="text/css"></link>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>staff participation</h2>
              
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Sino</th>
        <th>Department</th>
	<th>year</th>
        <th>Name of the programme</th>
        <th>no of staff</th>
        <th>name of staff</th>
	<th>name of organization</th>
	<th>Date</th>
	<th>Time</th>
      </tr>
    </thead>
    <tbody>
      <tr>

<?php

 include 'db1.php';
$r=mysqli_query($c,"select * from satff");


while ($row=mysqli_fetch_row($r))
{
echo "<td>".$row[0]."</td>";
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

</body>
</html>
