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
  background: #2db7c6f5;
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #893699ba;
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
    background-color:#250f84;;
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
  <h2>hod meeting</h2>
              
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Sino</th>
        <th>Department</th>
	<th>year</th>
        <th>meeting scheduled for principal with management</th>
     
	<th>Date</th>
	<th>Time</th>
      </tr>
    </thead>
    <tbody>
      <tr>

<?php
 include 'db1.php';
$r=mysqli_query($c,"select * from hod");


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
