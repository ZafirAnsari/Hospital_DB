<!DOCTYPE html>
<html>
<head>
	<title>set appointment</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body>
<div>
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
	    	session_start();
	    	session_unset();

	        $appointment_date = $_GET['date'];
	        $doctor = $_GET['doctor'];

	        $_SESSION["date"]=$appointment_date;
	        $_SESSION["doctor"]=$doctor;

	        $sql = "SELECT `time_slot_ID`,`start_time`,`end_time` FROM time_slot LEFT JOIN doctor ON `time_slot_ID` BETWEEN doctor.start_slot_ID AND doctor.end_slot_ID WHERE doctor.doctor_ID = '$doctor' AND `time_slot_ID` NOT IN (SELECT `time_slot_ID` FROM appointment WHERE `doctor_ID`='$doctor' AND `date`='$appointment_date')";

	        $result = mysqli_query($conn, $sql);
	        if(mysqli_num_rows($result) == 0)
	        {
	        	echo "No available slot of doctor ",$doctor," on ",$appointment_date,".<br>";
	        	header('Location:set_app.php?slotNotAvailable=1');

	        }
	 		if (mysqli_query($conn, $sql)) {
	            echo "<table border = '1'>";
	            echo "<tr><td colspan = '3'><h3>Available slots:</h3></td></tr>";
		        echo "<tr><th>ID</th><th>Start</th><th>End</th></tr>";
		        while($row = $result->fetch_assoc()) {
				    echo "<tr><td>" . $row["time_slot_ID"]. "</td><td>" . $row["start_time"]. "</td><td>" . $row["end_time"]. "</td></tr>";
				 }
				 echo "</table>";
	        } else {
	            echo "Query failed";
	        }

	        
	    }
	    mysqli_close($conn);
	?>
</div>
<form action = "set_appointment_2.php" method = "get">
	<div class="input-group mb-3">
		<div class="input-group-prepend">
			<span class="input-group-text text-white bg-danger">Time Slot ID:</span>
		</div>
		<input name = 'slot' type="text" class="form-control" required="">
		<div class="input-group-prepend">
			<span class="input-group-text text-white bg-danger">Patient ID:</span>
		</div>
		<input name = 'patient' type="text" class="form-control" required>
	</div>
	<input value ="add appointment" type="submit" class="btn btn-primary btn-block text-white bg-danger">
</form>
</body>
</html>