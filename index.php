<!DOCTYPE html>
<html lang="en">
<head>

	<title>Please rate your coffee</title>
<style>

h1   {color: black;font-size:25px}

</style>
</head>
<body>

<body style="background-color:#E8E8E8;">


	<left>
		<h1>Please rate your coffee</h1>

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

			type="submit" style=background-color:white;  value="Submit" >


		</form>

<p>
	<a href ="results.php">
		<button type="button" style=background-color:white >Results</button>
	</a>
</p>



	</center>
</body>
</html>
