<html lang="en">
<head>
  <title>View meeting</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>industrial visit</h2>
              
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Sino</th>
        <th>Department</th>
	<th>year</th>
        <th>number of students</th>
        <th>organization/concern name</th>
        <th>staff incharge</th>
	<th>time</th>
      </tr>
    </thead>
    <tbody>
      <tr>

<?php

$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,'7');
$r=mysqli_query($con,"select * from ind");


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
</div>

</body>
</html>
