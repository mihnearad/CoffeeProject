<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		 <link href="styles.css" rel="stylesheet">
		 
		<style type="text/css">
			table{
				border-collapse: collapse:;
				width:100%;
				color: #000000;
				font-family: monospace;
				fontsize: 14px;
				text-align: center;
				padding: 0px;
				border-bottom: 1px solid #eb4034;
			}

			th {
				background-color: #eb4034;
				color:white;
			}



			tr:nth-child(even) {background-color: #ededed}


			</style>
			
			<div class="topnav">
  <a href="index.php">CoffeeRate</a>
  <a class="active" href="results.php">Results</a>
  <a href="avgbytype.php">Averages</a>
</div>


	</head>

	<body>
		<table>
			<tr>
				<th>Entry #</th>
				<th>Date</th>
				<th>Time</th>
				<th>CoffeeType</th>
				<th>Beans</th>
				<th>Time Brew</th>
				<th>Output</th>
				<th>Ratio</th>
				<th>ML/S</th>
				<th>Grade</th>
				<th>User</th>

			</tr>
			<?php
			$conn = mysqli_connect("localhost", "form", "D&LxJ95EdZbG$", "coffeeproject");
			$sql = "select `Entry#` as '#', Date_Format(Date,'%d-%M-%Y') as Date, Date_Format(Time,'%H:%i') as Time, `Coffee Type`, Beans, `Time Brew`, Output, Format(Output / Beans,2) as 'Ratio', Format(Output / `Time Brew`,2) as 'ML/S', Grade, users.User from coffeelist left join coffeetype on CoffeeType_ID = CoffeeType left join users on users.User_ID=coffeelist.User order by `Entry#` asc;";
			$result = $conn-> query($sql);

			if ($result->num_rows > 0) {
				while($row = $result-> fetch_assoc()) {
					echo "<tr><td>" .
					$row["#"] . 	"</td><td>" .
					$row["Date"] . "</td><td>" .
					$row["Time"] . "</td><td>" .
					$row["Coffee Type"] . "</td><td>" .
					$row["Beans"] . "</td><td>" .
					$row["Time Brew"] . "</td><td>" .
					$row["Output"] . "</td><td>" .
					$row["Ratio"] . "</td><td>" .
					$row["ML/S"] . "</td><td>" .
					$row["Grade"] . "</td><td>" .
					$row["User"] . "</td></tr>" ;}

			}

			else {
				echo "No Results";
			}

			$conn-> close();
			?>
		</table>
		<p>
			<a href ="index.php">
				<button type="button" style=background-color:white >Back</button>
			</a>
		</p>
	</body>
</html>
