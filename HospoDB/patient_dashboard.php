<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<title>Patient</title>
</head>
	<div class="container rounded mx-auto bg-danger p-3 mt-5" style="width:400px">
		<div class="text-uppercase font-weight-bolder text-white text-center pb-3">
			<!img src="logo.jpg" class="float-right">	<!add logo image filename in src>
			<h1>Patient Menu</h1>
		</div>

		<div class="pb-2 mx-auto" style="width: 150px">
			<a href="updatePassword.html">
			<button type="button" class="btn bg-light text-danger btn-block">
			Change Current Password
			</button>
			</a>
		</div>

		<div class="pb-2 mx-auto" style="width: 150px">
			<a href="room_Apply1.php">
			<button type="button" class="btn bg-light text-danger btn-block">
			Apply for Room
			</button>
			</a>
		</div>

		<div class="pb-2 mx-auto" style="width: 150px">
			<a href="checkout1.php">
			<button type="button" class="btn bg-light text-danger btn-block">
			Checkout
			</button>
			</a>
		</div>

		<div class="pb-2 mx-auto" style="width: 150px">
			<a href="trends.html">
			<button type="button" class="btn bg-light text-danger btn-block">
			Bill
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
	<body>
	<?php
	if(isset($_GET['roomfail']))
	{
		echo "<p class='d-flex justify-content-center'> You have not checked-in</p>";
	}
	if(isset($_GET['roomsuccess']))
	{
		echo "<p class='d-flex justify-content-center'> checking-out</p>";
		echo "<p class='d-flex justify-content-center'> Please ask reception to generate bill to confirm check-out</p>";
	}
	?>
	</body>
</html>