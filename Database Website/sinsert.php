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
		$sid = $_REQUEST['sid'];
		$sname = $_REQUEST['sname'];
		$rating = $_REQUEST['rating'];
		$age = $_REQUEST['age'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO sailors VALUES ('$sid','$sname','$rating','$age')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>Insertion Successful!</h3>";

			echo nl2br("\n$sid\n $sname\n "
				. "$rating\n $age");
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
