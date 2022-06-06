<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => coffeeproject
		$conn = mysqli_connect("localhost", "form", "xxxxxxxxx", "coffeeproject");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 6 values from the form data(input)
		$Date = $_REQUEST['Date'];
		$Time = $_REQUEST['Time'];
		$CoffeeType = $_REQUEST['CoffeeType'];
		$Beans = $_REQUEST['Beans'];
		$TimeBrew = $_REQUEST['TimeBrew'];
		$Output = $_REQUEST['Output'];
		$Grade = $_REQUEST['Grade'];
		$User = $_REQUEST['User'];
		$Comments = $_REQUEST['Comments'];
		$Acidity = $_REQUEST['Acidity'];
		
		// Performing insert query execution
		
		$sql = "INSERT INTO `coffeelist`( `Date`, `Time`, `CoffeeType`, `Beans`, `Time Brew`, `Output`,`Acidity`,`Comments`,`Grade`,`User`)
		VALUES ('$Date','$Time','$CoffeeType','$Beans','$TimeBrew','$Output','$Acidity','$Comments','$Grade','$User')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>Data stored in the database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

/* 			echo nl2br("\n$Date\n $Time\n "
				. "$CoffeeType\n $Beans\n $TimeBrew"); */
				
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
