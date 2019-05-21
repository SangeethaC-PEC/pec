<html lang="en">
<head>
  <title>View meeting</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>

body {
  background: #69707a;
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color:#69707a;
}

li.dropdown {
    display: inline-block;
}
label{
 align:center;
 color:white;
 }
H1{
color:red;
}

table {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td,th {
    border: 1px solid #ddd;
    padding: 8px;
}

tr{background-color: #f2f2f2;}

tr:hover {background-color: #ddd;}

th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}
</style>
 </head>
 <body>

<ul>
<li><a href="AllViewedit.html">Home</a></li>
<li><a href="logout.php">LogOut</a></li>

</ul>


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
 include 'db1.php';
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
