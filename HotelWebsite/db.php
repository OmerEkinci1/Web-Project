
<?php

	$server = "localhost";
	$con = mysqli_connect($server,"root","","otelsite");
	if (mysqli_errno($con)) {
		echo "Fialed to connect".mysql_errno();
	}
?>