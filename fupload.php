<?php

	
	if(isset($_POST['sub']))
{

			$name = $_FILES['file']['name'];
			$size = $_FILES['file']['size'];
			$type = $_FILES['file']['type'];
			$a=$_POST['d'];
			$b=$_POST['y'];
			
			
		if(isset($name)&& !empty($name))
		{

			

			$tmp_name = $_FILES['file']['tmp_name'];
			$location = "uploads/";
			if(move_uploaded_file($tmp_name, $location.$name))
			{
			$smsg = "Uploaded Successfully";
			 include 'db1.php';
			if(mysqli_query($c,"insert into subnotes values('','$a',$b,'$name')"))
			echo "suceesfuly inserted";
			else
			echo "Not inserted";

			}
			else
			{
			$fmsg = "Failed to Upload File";
			}
		}
		
		else
		{
		$fmsg = "Please Select a File";
		}
}



?>
<?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
<?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
      


<form class="form-signin" method="POST" enctype="multipart/form-data">


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
			
                        </select>

	    <label for="InputFile">File input</label>
	    <input type="file" name="file" id="InputFile">
	    
	  </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="sub">Upload</button>
      </form>

     

