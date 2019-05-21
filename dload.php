
<?php


if(isset($_GET['sub']))
{
$s2=$_GET["d"];
$s3=$_GET["y"];

$n="";
 include 'db1.php';

$r=mysqli_query($c,"select * from subnotes where dept='$s2' and sem='$s3' ");
 
WHILE ($r1 = mysqli_fetch_array($r,MYSQLI_NUM))
{

       $n= $r1[3];


?>

<iframe src="<?php echo "uploads/".$n; ?>" width="100%" style="height:100%">
</iframe>

<?php

}
}

?>

<form class="form-signin">


        <h2 class="form-signin-heading">Upload Notes</h2>


	  <div class="form-group">

		Department      : <select name="d" class="form-control">
			<option value=""></option>
                        <option value="cse">CSE</option>
                        <option value="ece">ECE</option>
                        <option value="IT">IT</option>
                        <option value="eee">EEE</option>
                        <option value="biotech">BIO-TECH</option>
                        <option value="civil">CIVIL</option>
                        </select></br></br>

       	               
			Sem      : <select name="y" class="form-control">
			<option value=""></option>
                        <option value="1 ">1</option>
                        <option value="2 ">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
			<option value="4">5</option>
			<option value="3">6</option>
                        <option value="4">7</option>
			<option value="4">8</option>
	</div>		
                        </select>

	   
        <input type="submit" name="sub">
      </form>

