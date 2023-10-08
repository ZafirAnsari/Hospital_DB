<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<title>Admin</title>
</head>
	<div class="container rounded mx-auto bg-danger p-3 mt-5" style="width:400px">
		<div class="text-uppercase font-weight-bolder text-white text-center pb-3">
			<!img src="logo.jpg" class="float-right">	<!add logo image filename in src>
			<h1>Admin Menu</h1>
		</div>
		<div class="dropdown pb-2 mx-auto" style="width: 150px">
			<button type="button" class="btn dropdown-toggle bg-light text-danger btn-block" data-toggle="dropdown">
			Add Employee
			</button>
			<div class="dropdown-menu pb-2">
				<a class="dropdown-item" href="doctor_form.php">Doctor</a>
				<a class="dropdown-item" href="staff_form.html">Other Staff</a>
			</div>
		</div>

		<div class="dropdown pb-2 mx-auto" style="width: 150px">
			<button type="button" class="btn dropdown-toggle bg-light text-danger btn-block" data-toggle="dropdown">
			Edit Employee
			</button>
			<div class="dropdown-menu">
				<a class="dropdown-item" href="edit_doctor.html">Doctor</a>
				<a class="dropdown-item" href="edit_staff.html">Other Staff</a>
			</div>
		</div>

		<div class="pb-2 mx-auto" style="width: 150px">
			<button type="button" class="btn dropdown-toggle bg-light text-danger btn-block" data-toggle="dropdown">
			View Employee
			</button>
			<div class="dropdown-menu">
				<a class="dropdown-item" href="view_doctor.php">Doctor</a>
				<a class="dropdown-item" href="view_emp.php">Other Staff</a>
			</div>
		</div>

		<div class="pb-2 mx-auto" style="width: 150px">
			<a href="trends.html">
			<button type="button" class="btn bg-light text-danger btn-block">
			View Trends
			</button>
			</a>
		</div>

		<div class="pb-2 mx-auto" style="width: 150px">
			<a href="index.html">
			<button type="button" class="btn bg-light text-danger btn-block">
			Back to main menu
			</button>
			</a>
		</div>

	</div>
</html>