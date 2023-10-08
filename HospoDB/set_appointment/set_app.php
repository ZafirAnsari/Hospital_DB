<!DOCTYPE html>
<html>
<head>
	<title>Add New Doctor</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<?php
			if(isset($_GET['slotNotAvailable']))
			{
				echo "<p class='d-flex justify-content-center'> <br> No such slot available. Please Enter again.<br></p>";
			}
			if(isset($_GET['slotOccupied']))
			{
				echo "<p class='d-flex justify-content-center'> <br> Selected slot occupied. Please Enter again.<br></p>";
			}

		?>
<?php
		$servername = 'localhost';
	    $username = 'root';
	    $password = '';
	    $dbname = 'hospodb';

	    $conn = mysqli_connect($servername, $username, $password, $dbname);

	    if ($conn==false) {
	        echo "Connection Failed";
	    }
	    else{
	        $sql = "SELECT `doctor_ID`,`name`,`rank`,`department_name` FROM doctor WHERE `department_name` != 'Accident and Emergency' AND `rank` != 'Intern' AND `rank` != 'Specialist Surgeon'";
	        $result = mysqli_query($conn, $sql);
	 		if (mysqli_query($conn, $sql)) {
	            echo "<table border = '1'>";
	            echo "<tr><td colspan = '4'><h3>All Doctors:</h3></td></tr>";
		        echo "<tr><th>ID</th><th>Name</th><th>Rank</th><th>Department</th></tr>";
		        while($row = $result->fetch_assoc()) {
				    echo "<tr><td>" . $row["doctor_ID"]. "</td><td>" . $row["name"]. "</td><td>" . $row["rank"]. "</td><td>" . $row["department_name"]. "</td></tr>";
				 }
				 echo "</table>";
	        } else {
	            echo "Query failed";
	        }
	    }
	    mysqli_close($conn);

?>
<form action = "set_appointment.php" method = "get">
	<div class="input-group mb-3">
		<div class="input-group-prepend">
			<span class="input-group-text text-white bg-danger">Doctor ID:</span>
		</div>
		<input name = 'doctor' type="text" class="form-control" required="">
		<div class="input-group-prepend">
			<span class="input-group-text text-white bg-danger">Date:</span>
		</div>
		<input name = 'date' type="date" class="form-control" placeholder="YYYY-MM-DD" required>
	</div>

<input type="submit" class="btn btn-primary btn-block text-white bg-danger">
</form>
</html>