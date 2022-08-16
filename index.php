<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Please rate your coffee</title>
	<link href="styles.css" rel="stylesheet">
	

<div class="topnav">
  <a class="active" href="index.php">CoffeeRate</a>
  <a href="results.php">Results</a>
  <a href="avgbytype.php">Averages</a>
</div>


</head>

<body class="class-for-index">

<body style="background-color:white;">


	<left>
		

		<form action="insert.php" method="post">

<p>
			<label for="Date">Date:</label>
			<input type="date" name="Date" id="Date" required>
			</p>


<p>
			<label for="Time">Time:</label>
			<input type="TIME" name="Time" id="Time" required>
			</p>



<p>
			<label for="CoffeeType">Choose a Coffee Type:</label>
			<select name="CoffeeType" id="CoffeeType">
				<option value="1">Indonesie Sumatra</option>
				<option value="2">Ethiopia Djimmah</option>
				<option value="3">Guatemala Antiqua</option>
				<option value="4">Columbia Excelso</option>
				<option value="5">Amestec Espresso</option>
				<option value="6">Bolivia AA</option>
				<option value="7">Fresh Quartet</option>
				<option value="8">Vergano</option>
				<option value="9">Ethiopia Yirga Cheffe</option>
				<option value="8">Espresso Tandem</option>
			</select>
			</p>


<p>
			<label for="Beans">Beans:</label>
			<input type="decimal" name="Beans" id="Beans">
			</p>


<p>
			<label for="TimeBrew">Time Brewed:</label>
			<input type="decimal" name="TimeBrew" id="TimeBrew">
			</p>

<p>
			<label for="Output">Coffee Output:</label>
			<input type="decimal" name="Output" id="Output">
			</p>

<p>
			<label for="Acidity">Acidity</label>
			<input type="number" name="Acidity" id="Acidity">
			</p>

<p>
			<label for="Comments">Comments</label>
			<input type="text" name="Comments" id="Comments">
			</p>


<p>
			<label for="Grade2">Taste Grade:</label>
			<input type="number" name="Grade" id="Grade">
			</p>

			<p>
			<label for="User">Choose an User:</label>
			<select name="User" id="User">
				<option value="1">Mihnea</option>
				<option value="2">Dasha</option>
				<option value="3">Other</option>
			</select>
			</p>


			<input

			type="submit" style=font-family:monospace;  value="Submit" >


		</form>


	</center>
	
 &nbsp

	
		<table>
			<tr>
				<th>Nr #</th>
				<th>Time</th>
				<th>User</th>
				<th>Grade</th>
				<th>Output</th>
				<th>Acidity</th>
				<th>Time Brew</th>
				<th>ML/S</th>
				<th>Ratio</th>
				<th>Coffee Type</th>
				<th>Comments </th>
			</tr>
			<?php
			$conn = mysqli_connect("localhost", "form", "D&LxJ95EdZbG$", "coffeeproject");
			$sql = "select `Entry#` as 'Coffee Nr', Time, users.User, Grade as Grade, Output as Output, Acidity, `Time Brew`, Format(Output / `Time Brew`,2) as 'ML/S',Format(Output / Beans,2) as 'Ratio', Beans, coffeetype.`Coffee Type`, Comments from coffeelist left join coffeetype on coffeelist.`CoffeeType`=CoffeeType_ID left join users on users.User_ID=coffeelist.User where Date=CURDATE() group by users.User;";
			$result = $conn-> query($sql);

			if ($result->num_rows > 0) {
				while($row = $result-> fetch_assoc()) {
					echo "<tr><td>" .
					$row["Coffee Nr"] . 	"</td><td>" .
					$row["Time"] . "</td><td>" .
					$row["User"] . "</td><td>" .
					$row["Grade"] . "</td><td>" .
					$row["Output"] . "</td><td>" .
					$row["Acidity"] . "</td><td>" .
					$row["Time Brew"] . "</td><td>" .
					$row["ML/S"] . "</td><td>" .
					$row["Ratio"] . "</td><td>" .

					$row["Coffee Type"] . "</td><td>" .
					$row["Comments"] . "</td></tr>" 	;}

			}

			else {
				;
			}

			$conn-> close();
			?>
		</table>
	
</body>
</html>
