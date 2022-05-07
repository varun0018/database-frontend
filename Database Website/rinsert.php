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
		
		// Taking all 3 values from the form data(input)
		$sid = $_REQUEST['sid'];
		$bid = $_REQUEST['bid'];
		$day = $_REQUEST['day'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO reserves VALUES ('$sid','$bid','$day')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>Insertion Successful!</h3>";

			echo nl2br("\n$sid\n $bid\n $day");
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
