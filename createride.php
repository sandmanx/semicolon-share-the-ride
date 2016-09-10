<html>
	<head>
		<title> Create Ride</title>
	</head>
	<body>
		<table cellspacing="15px" border="0px">
		<form action="cr.php" method="POST">
			<tr>
			<td>Name</td>
			<td><input type="text" name="name"></td>
			</tr>
			<tr>
			<td>Source</td>
			<td><input type="text" name="source"></td>
			</tr>
			<tr>
			<td>Destination</td>
			<td><input type="text" name="destination"></td>
			</tr>
			<tr>
			<td>date</td>
			<td><select name="day">
			<option>Sunday</option>
			<option>Monday</option>
			<option>Tuesday</option>
			<option>Wednesday</option>
			<option>Thursday</option>
			<option>Friday</option>
			<option>Saturday</option>
			</td>
			</tr>
			<tr>
			<td>time</td>
			<td><input type="time" name="begtime"></td>
			</tr>
			<tr>
			<td><input type="submit" name="Create Ride" value="Create Ride"></td>
			</tr>

	</body>

</html>