	<?php

	$c=mysqli_connect("localhost","root","","event");

		$n=mysqli_query($c,"select nog from guest where event_id='02652'");
        $r=mysqli_fetch_array($n);
        echo $r['nog'];
        ?>