<html>
	<head>
		<style type="text/css">
			table{
				border-collapse: collapse:;
				width:100%;
				color: #000000;
				font-family: monospace;
				fontsize: 14px;
				text-align: left;
				padding: 5px;
				border-bottom: 1px solid #eb4034;
			}

			th {
				background-color: #eb4034;
				color:white;
			}



			tr:nth-child(even) {background-color: #ededed}


			</style>
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
			$sql = "select `Entry#` as '#', Date_Format(Date,'%d-%M-%Y') as Date, Date_Format(Time,'%H:%i') as Time, `Coffee Type`, Beans, `Time Brew`, Output, Format(Output / Beans,2) as 'Ratio', Format(Output / `Time Brew`,2) as 'ML/S', Grade, Users.User from coffeelist left join coffeetype on CoffeeType_ID = CoffeeType left join users on users.User_ID=coffeelist.User order by `Entry#` asc;";
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
	</body>
</html>
