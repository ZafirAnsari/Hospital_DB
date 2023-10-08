<!DOCTYPE html>
<html>
<head>
	<title>attendance</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
	<?php
		if(isset($_GET['invalidIdDoctor']))
		{
			echo "<p class='d-flex justify-content-center'> <br> Invalid Doctor ID entered. Please enter again.<br></p>";
		}
		if(isset($_GET['invalidIdStaff']))
		{
			echo "<p class='d-flex justify-content-center'> <br> Invalid Staff ID entered. Please enter again.<br></p>";
		}
	?>

	<form action = "attendance.php" method = "get">
		<div class="input-group mb-3">
			<div class="input-group-prepend">
				<span class="input-group-text text-white bg-danger">ID:</span>
			</div>
			<input name = "id" type="text" class="form-control" required>
			<div class="input-group-prepend">
				<span class="input-group-text text-white bg-danger">Department:</span>
			</div>
				<select name = "job" class="form-control" required>
					<option value="Doctor">Doctor</option>
					<option value="Other Staff">Staff</option>
				</select>
		</div>
		<input value ="Present" type="submit" class="btn btn-primary btn-block text-white bg-danger">
	</form>

</body>
</html>