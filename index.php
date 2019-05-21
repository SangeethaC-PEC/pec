<html>
<head>
<title>Login</title>


<?php


    session_start();

	if(isset($_GET['sub']))
	{
	$u=$_GET['un'];
$_SESSION['lu']=$u;
$p=$_GET['pw'];
$r=$_GET['role'];
	
include 'db1.php';
	
	$r1=mysqli_query($c ,"select * from user where uid='$u' and pwd='$p' and role='$r' ");
	$row=mysqli_fetch_row($r1);

	if($row>0)


	{
		if(isset($_SESSION["lu"])) {

		

		echo $r;
		
		if($r=="admin")	
		{
			
		Header('Location:AllViewedit1.html');
	
		}	

		elseif($r=="hod")
		{
	
		Header('Location:AllViewedit.html');
		
		}	

		elseif($r=="staff")
		{
	
		Header('Location:AllView1.html');
		
		}	
		elseif($r=="student")
		{
	
		Header('Location:AllView.html');
		
		}	
		elseif($r=="principal")
		{
			header('Location:view.html');
		
		}
		
	
		
	}
	else
	{
	echo "not valid user";
	}
}


}	

?>
<style>
body {
  background: #2d343d;
}

.login {
  margin: 20px auto;
  width: 300px;
  padding: 30px 25px;
  background: white;
  border: 1px solid #c4c4c4;
}

h1,h1.login-title {
  margin: -28px -25px 25px;
  padding: 15px 25px;
  line-height: 30px;
  font-size: 25px;
  font-weight: 300;
  color: #ADADAD;
  text-align:center;
  background: #f7f7f7;
 
}

h1{
  
  padding: 15px 25px;
  line-height: 100px;
  font-size: 55px;
  font-weight: 300;
  color:maroon;
  text-align:center;
  background: #f7f7f7;
 
 
}


.login-input {
  width: 285px;
  height: 50px;
  margin-bottom: 25px;
  padding-left:10px;
  font-size: 15px;
  background: #fff;
  border: 1px solid #ccc;
  border-radius: 4px;
}
.login-input:focus {
    border-color:#6e8095;
    outline: none;
  }
.login-button {
  width: 100%;
  height: 50px;
  padding: 0;
  font-size: 20px;
  color: #fff;
  text-align: center;
  background: #f0776c;
  border: 0;
  border-radius: 5px;
  cursor: pointer; 
  outline:0;
}

.login-lost
{
  text-align:center;
  margin-bottom:0px;
}

.login-lost a
{
  color:#666;
  text-decoration:none;
  font-size:13px;
}



</style>

</head>


<h1>Management Information system</h1>
 

<form  method="get" class="login">
       	             
<h1 class="login-title">Login</h1>		     
	<input type="text" class="login-input" id="usr" name="un"  Placeholder="USER NAME"/></br></br>
	<input type="password" class="login-input" id="usr" name="pw"  Placeholder="PASSWORD"/></br></br>
			 
                        <select name="role" class="login-input">
			<option value="staff">SELECT ROLE</option>			
                        <option value="staff">STAFF</option>
                        <option value="hod">HOD</option>
			<option value="admin">ADMIN</option>
			<option value="student">STUDENT</option>
			<option value="principal">Principal</option>


			</select></br></br>
			






	
			
			
        
     
		
	<input type="submit" name="sub" class="login-button" value="Submit" /></br>

	</form>


</html>
