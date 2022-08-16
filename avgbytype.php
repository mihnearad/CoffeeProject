<html>
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="styles.css" rel="stylesheet">

		<style type="text/css">
			table{
				border-collapse: collapse:;
				width:fit;
				color: #000000;
				font-family: monospace;
				fontsize: 14px;
				text-align: center;
				padding: 1px;
			}

			th {
				background-color: #eb4034;
				color:white;
			}



			tr:nth-child(even) {background-color: #ededed}


			</style>
			
			<div class="topnav">
  <a href="index.php">CoffeeRate</a>
  <a href="results.php">Results</a>
  <a class="active" href="avgbytype.php">Averages</a>
</div>
			
	</head>

	<body class="class-for-page">
			 &nbsp

		<table>
			<tr>
				<th>Coffee Type #</th>
				<th>Coffees</th>
				<th>Grade</th>
			</tr>
			<?php
			$conn = mysqli_connect("localhost", "form", "D&LxJ95EdZbG$", "coffeeproject");
			$sql = "select coffeetype.`Coffee Type`, count(`Entry#`) as Coffees, format(avg(Grade),2) as Grade from coffeelist left join coffeetype on coffeetype.CoffeeType_ID=CoffeeType group by CoffeeType order by Grade desc;";
			$result = $conn-> query($sql);

			if ($result->num_rows > 0) {
				while($row = $result-> fetch_assoc()) {
					echo "<tr><td>" .
					$row["Coffee Type"] . 	"</td><td>" .
					$row["Coffees"] . "</td><td>" .
					$row["Grade"] . "</td></tr>" ;}

			}

			else {
				echo "No Results";
			}

			$conn-> close();
			?>
		</table>
		 &nbsp

		<table>
			<tr>
				<th>User #</th>
				<th>Coffees</th>
				<th>Grade</th>
				<th>Avg Volume</th>
			</tr>
			<?php
			$conn = mysqli_connect("localhost", "form", "D&LxJ95EdZbG$", "coffeeproject");
			$sql = "select users.User, count(`Entry#`) as Coffees, format(avg(Output),1) as AvgVolume, format(avg(Grade),1) as AvgGrade from coffeelist left join users on users.User_ID=coffeelist.User group by User;";
			$result = $conn-> query($sql);

			if ($result->num_rows > 0) {
				while($row = $result-> fetch_assoc()) {
					echo "<tr><td>" .
					$row["User"] . 	"</td><td>" .
					$row["Coffees"] . "</td><td>" .
					$row["AvgGrade"] . "</td><td>" .
					$row["AvgVolume"] . "</td></tr>" 
					
					
					
					;}

			}

			else {
				echo "No Results";
			}

			$conn-> close();
			?>
		</table>
		
		
		</p>
	</body>
</html>
