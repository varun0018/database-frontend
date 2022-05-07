<!DOCTYPE html>
<html>

<head>
	<title>Inserting...</title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => sailors
		$conn = mysqli_connect("localhost", "root", "", "sailors");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$bid = $_REQUEST['bid'];
		$bname = $_REQUEST['bname'];
		$color = $_REQUEST['color'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO boats VALUES ('$bid','$bname','$color')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>Insertion Successful!</h3>";

			echo nl2br("\n$bid\n $bname\n $color");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>
</html>
