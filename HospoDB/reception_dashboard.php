<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<title>Reception</title>
</head>
	<div class="container rounded mx-auto bg-danger p-3 mt-5" style="width:400px">
		<div class="text-uppercase font-weight-bolder text-white text-center pb-3">
			<!img src="logo.jpg" class="float-right">	<!add logo image filename in src>
			<h1>Reception Menu</h1>
		</div>

		<div class="pb-2 mx-auto" style="width: 250px">
			<a href="updatePassword.html">
			<button type="button" class="btn bg-light text-danger btn-block">
			Change Current Password
			</button>
			</a>
		</div>

		<div class="pb-2 mx-auto" style="width: 250px">
			<a href="patient_form.html">
			<button type="button" class="btn bg-light text-danger btn-block">
			Patient Registration
			</button>
			</a>
		</div>

		<div class="pb-2 mx-auto" style="width: 250px">
			<a href="edit_patient.html">
			<button type="button" class="btn bg-light text-danger btn-block">
			Edit Patient Details
			</button>
			</a>
		</div>

		<div class="pb-2 mx-auto" style="width: 250px">
			<a href="view_patient_info.php">
			<button type="button" class="btn bg-light text-danger btn-block">
			View Patient Information
			</button>
			</a>
		</div>

		<div class="dropdown pb-2 mx-auto" style="width: 250px">
			<button type="button" class="btn dropdown-toggle bg-light text-danger btn-block" data-toggle="dropdown">
			Appointments
			</button>
			<div class="dropdown-menu pb-2">
				<a class="dropdown-item" href="set_appointment\set_app.php">Set Appointment</a>
				<a class="dropdown-item" href="view_Appointment.php">View Appointment</a>
				<a class="dropdown-item" href="staff_form.html">Edit Appointment</a>
				<a class="dropdown-item" href="cancel_appointment.html">Cancel Appointment</a>
			</div>
		</div>

		<div class="dropdown pb-2 mx-auto" style="width: 250px">
			<button type="button" class="btn dropdown-toggle bg-light text-danger btn-block" data-toggle="dropdown">
			Billing
			</button>
			<div class="dropdown-menu pb-2">
				<a class="dropdown-item" href="appointment_bill.html">Appointment Bill</a>
				<a class="dropdown-item" href="room_bill.html">Room Bill</a>
			</div>
		</div>

		<div class="pb-2 mx-auto" style="width: 250px">
			<a href="attendance\staff_attendance.php">
			<button type="button" class="btn bg-light text-danger btn-block">
			Staff Attendance
			</button>
			</a>
		</div>

		<div class="pb-2 mx-auto" style="width: 250px">
			<a href="index.html">
			<button type="button" class="btn bg-light text-danger btn-block">
			Back to main menu
			</button>
			</a>
		</div>

	</div>
</html>