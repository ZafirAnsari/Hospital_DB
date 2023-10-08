<?php

session_start();

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'hospodb';

$conn = mysqli_connect($servername, $username, $password, $dbname);
//echo "i am here";

if ($conn==false) {
    echo "Connection Failed";
} 
$sql="select room_number,bill_charges,category from room where occupied='0'";
    $result=$conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Doctor Information</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body>
    <div class="container">
        <h2>Select Room</h2>
        <p>The following rooms are available</p>
        <?php
						if(isset($_GET['passwordFail']))
						{
							echo "<p class='d-flex justify-content-center'> Enter correct username/Password or checkout</p>";
                        }
                        if(isset($_GET['roomFail']))
						{
							echo "<p class='d-flex justify-content-center'> Enter correct room info</p>";
                        }
                        if(isset($_GET['success']))/////////////////////remove later
						{
                           // $patient_idd=$_GET['success'];

							echo "<p class='d-flex justify-content-center'> Successful Application ".$_SESSION['p_name']."</p>";
						}

					?>
        <table class ="table table-hover">
            <thead>
                <tr>
                    <th>Category</th>
                    <th>Room Number</th>
                    <th>Daily Charges</th>
                </tr>
            </thead>
            
                
                    <?php
                    if($result->num_rows>0)
                    {
                        while($row=$result->fetch_assoc())
                        {
                            ?>
                            <tbody>
                            <tr>
                            <td><?php echo $row["category"]?></td>
                            <td><?php echo $row["room_number"]?></td>
                            <td><?php echo $row["bill_charges"]?></td>
                            </tr>
                            </tbody>
                            <?php

                        }
                    }
                    else{
                        echo "no room available";
                    }
                    ?>
                    
                    
                    
        </table>
                </div>
                <div>
                    <p1>Please enter correct Room Number, Category and Care taker Contact number</p2>
                <form action="room_Apply2.php" method="post" >
                <div class="input-group mb-3">
							<!-- <div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="number" name="patientID" class="form-control input_user" value="" placeholder="Patient ID">
                        </div>
                        <div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="password" name="patientPassword" class="form-control input_user" value="" placeholder="Password">
                        </div> -->
                        <br>
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="number" name="room_num" class="form-control input_user" value="" placeholder="Room number">
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="text" name="room_cat" class="form-control input_pass" value="" placeholder="category">
                        </div>
                        <div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="text" name="patient_contact" class="form-control input_pass" value="" placeholder="contact">
						</div>
						<!-- <div class="form-group">
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="customControlInline">
								<label class="custom-control-label" for="customControlInline">Remember me</label>
							</div>
						</div> -->
							<div class="d-flex justify-content-center mt-3 login_container">
					 <input type="submit" value="Apply" class="btn login_btn">
					 <a href="index.html"><input type="button" value="main menu" class="btn login_btn" ></a>

					 
				   </div>
					</form>
                </div>
                </body>
                </html>
                <?php
                    mysqli_close($conn);
                    ?>
                    <?php
                    // remove all session variables
                    //session_unset();

                    // destroy the session
                    //session_destroy();
                    ?>
                



                



    
    






