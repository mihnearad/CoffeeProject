<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
	 <link href="styles.css" rel="stylesheet">
	 
	<div class="topnav">
  <a href="index.php">CoffeeRate</a>
  <a href="results.php">Results</a>
  <a href="avgbytype.php">Averages</a>
  
</div>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => coffeeproject
		$conn = mysqli_connect("localhost", "form", "D&LxJ95EdZbG$", "coffeeproject");
		
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
			echo "<h3>Coffee Added!";

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
