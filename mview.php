<html lang="en">
<head>
  <title>View meeting</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>

</style>
 </head>
 <body>

<ul>
<li><a href="AllViewedit.html">Home</a></li>
<li><a href="logout.php">LogOut</a></li>

</ul>


<div class="container">
  <h2>DEPARTMENT</h2>
              
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Sino</th>
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

 include 'db1.php';
$r=mysqli_query($c,"select * from mis");


while ($row=mysqli_fetch_row($r))
{
echo "<td>".$row[0]."</td>";
echo "<td>".$row[1]." </td>";
echo "<td> ".$row[2]."</td>";
echo "<td> ".$row[3]."</td>";
echo "<td> ".$row[4]."</td>";
echo "<td> ".$row[5]."</td>";
echo  "</tr>";
}
?>
      
    </tbody>
  </table>
</div>

</body>
</html>
