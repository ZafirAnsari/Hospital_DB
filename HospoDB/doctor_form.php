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

<body>
	<form action = "register_doctor.php" method = "get">
		<?php
			if(isset($_GET['emailNotAvailable']))
			{
				echo "<p class='d-flex justify-content-center'> The email you enetered is occupied. Please enter again.</p>";
			}

		?>
		<div class="input-group mb-3">
			<div class="input-group-prepend">
				<span class="input-group-text text-white bg-danger">Doctor:</span>
			</div>
			<input name = 'name' type="text" class="form-control" placeholder="Name" required>
		</div>
		<div class="input-group mb-3">
			<div class="input-group-prepend">
				<span class="input-group-text text-white bg-danger">Age:</span>
			</div>
			<input name = 'age' type="text" class="form-control" required="">
			<div class="input-group-prepend">
				<span class="input-group-text text-white bg-danger">Gender:</span>
			</div>
			<input name = 'gender' type="text" class="form-control" placeholder="M / F" required>
		</div>
		<div class="input-group mb-3">
			<div class="input-group-prepend">
				<span class="input-group-text text-white bg-danger">Phone Number:</span>
			</div>
			<input name = 'phone_no' type="text" class="form-control" required>
			<div class="input-group-prepend">
				<span class="input-group-text text-white bg-danger">Company Email:</span>
			</div>
			<input name = 'company_email' type="text" class="form-control" placeholder="someone@example.com" required="">
		</div>
		<div class="input-group mb-3">
			<div class="input-group-prepend">
				<span class="input-group-text text-white bg-danger">Department:</span>
			</div>
			<select name = "department" class="form-control" required>
				<option value="General Medicine">General Medicine</option>
				<option value="Neurology">Neurology</option>
				<option value="Cardiology">Cardiology</option>
				<option value="Orthopaedics">Orthopaedics</option>
				<option value="E N T">E N T</option>
				<option value="Dermatology">Dermatology</option>
				<option value="Anesthesiology">Anesthesiology</option>
				<option value="General Surgery">General Surgery</option>
				<option value="Accident & Emergency">Accident & Emergency</option>
				<option value="Physiotherapy">Physiotherapy</option>
			</select>
			<div class="input-group-prepend">
				<span class="input-group-text text-white bg-danger">Office Number:</span>
			</div>
			<input name = "office_no" type="text" class="form-control" required>
			<div class="input-group-prepend">
				<span class="input-group-text text-white bg-danger">Rank:</span>
			</div>
			<select name = "rank" class="form-control" required>
				<option value="Medical Director">Medical Director</option>
				<option value="Head of Department">Head of Department</option>
				<option value="Normal Specialist">Normal Specialist</option>
				<option value="Attending Physician">Attending Physician</option>
				<option value="Physician Assistant">Physian Assistant</option>
				<option value="Senior Resident">Senior Resident</option>
				<option value="Junior Resident">Junior Resident</option>
				<option value="Intern">Intern</option>
				<option value="Specialist Surgeon">Specialist Surgeon</option>
				<option value="Surgeory Assistant"></option>
			</select>	
		</div>
		<div class="input-group mb-3">
			<div class ="input-group-prepend">
				<span class="input-group-text text-white bg-danger">Start Slot:</span>		
			</div>
			<select type="text" name = "working_hours_1" class="form-control" required>
			<option value="1">9:00</option>
			<option value="2">9:15</option>
			<option value="3">9:30</option>
			<option value="4">9:45</option>
			<option value="5">10:00</option>
			<option value="6">10:15</option>
			<option value="7">10:30</option>
			<option value="8">10:45</option>
			<option value="9">11:00</option>
			<option value="10">11:15</option>
			<option value="11">11:30</option>
			<option value="12">11:45</option>
			<option value="13">12:00</option>
			<option value="14">12:15</option>
			<option value="15">12:30</option>
			<option value="16">12:45</option>
			<option value="17">13:00</option>
			<option value="18">13:15</option>
			<option value="19">13:30</option>
			<option value="20">13:45</option>
			<option value="21">14:00</option>
			<option value="22">14:15</option>
			<option value="23">14:30</option>
			<option value="24">14:45</option>
			<option value="25">15:00</option>
			<option value="26">15:15</option>
			<option value="27">15:30</option>
			<option value="28">15:45</option>
			<option value="29">16:00</option>
			<option value="30">16:15</option>
			<option value="31">16:30</option>
			<option value="32">16:45</option>
			<option value="33">17:00</option>
			<option value="34">17:15</option>
			<option value="35">17:30</option>
			<option value="36">17:45</option>
			<option value="37">18:00</option>
			<option value="38">18:15</option>
			<option value="39">18:30</option>
			<option value="40">18:45</option>
			<option value="41">19:00</option>
			<option value="42">19:15</option>
			<option value="43">19:30</option>
			<option value="44">19:45</option>
			</select>
		</div>

		<div class="input-group mb-3">
			<div class ="input-group-prepend">
				<span class="input-group-text text-white bg-danger">End Slot:</span>		
			</div>
			<select type="text" name = "working_hours_2" class="form-control" required>
			<option value="1">9:00</option>
			<option value="2">9:15</option>
			<option value="3">9:30</option>
			<option value="4">9:45</option>
			<option value="5">10:00</option>
			<option value="6">10:15</option>
			<option value="7">10:30</option>
			<option value="8">10:45</option>
			<option value="9">11:00</option>
			<option value="10">11:15</option>
			<option value="11">11:30</option>
			<option value="12">11:45</option>
			<option value="13">12:00</option>
			<option value="14">12:15</option>
			<option value="15">12:30</option>
			<option value="16">12:45</option>
			<option value="17">13:00</option>
			<option value="18">13:15</option>
			<option value="19">13:30</option>
			<option value="20">13:45</option>
			<option value="21">14:00</option>
			<option value="22">14:15</option>
			<option value="23">14:30</option>
			<option value="24">14:45</option>
			<option value="25">15:00</option>
			<option value="26">15:15</option>
			<option value="27">15:30</option>
			<option value="28">15:45</option>
			<option value="29">16:00</option>
			<option value="30">16:15</option>
			<option value="31">16:30</option>
			<option value="32">16:45</option>
			<option value="33">17:00</option>
			<option value="34">17:15</option>
			<option value="35">17:30</option>
			<option value="36">17:45</option>
			<option value="37">18:00</option>
			<option value="38">18:15</option>
			<option value="39">18:30</option>
			<option value="40">18:45</option>
			<option value="41">19:00</option>
			<option value="42">19:15</option>
			<option value="43">19:30</option>
			<option value="44">19:45</option>
			</select>
		</div>

		<div class="input-group mb-3">
			<div class="input-group-prepend">
				<span class="input-group-text text-white bg-danger">Salary:</span>
			</div>
			<input name = "salary" type="text" class="form-control" required>
			<div class="input-group-prepend">
				<span class="input-group-text text-white bg-danger">Charges:</span>
			</div>
			<input name = "charges" type="text" class="form-control" required>
		</div>
		<div class="input-group mb-3">	<!add no-validate to class to validate after submission. requires JSQuery code OR>
			<div class="input-group-prepend">
				<span class="input-group-text text-white bg-danger">Password:</span>
			</div>
			<input name = "login" type="password" class="form-control" placeholder="Password" required>
		</div>
		<!generate random password, generate salary acc to rank, generate charges acc to dept and rank>
	<input value ="Register" type="submit" class="btn btn-primary btn-block text-white bg-danger">
	
	</form>
	<a href="admin_dashboard.php">
			<button class="btn btn-primary btn-block text-white bg-danger">Back to Admin Menu</button>
	</a>
</body>
</html>