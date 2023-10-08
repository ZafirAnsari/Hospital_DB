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
$sql="select appointment_ID,time_slot_ID,doctor_ID,patient_ID,date from appointment";
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
        <h2>Appointments</h2>
        
      
        <table class ="table table-hover">
            <thead>
                <tr>
                    <th>appointment_ID</th>
                    <th>time_slot_ID</th>
                    <th>doctor_ID</th>
                    <th>patient_ID</th>
                    <th>date</th>
                </tr>
            </thead>
            
                
                    <?php
                    if($result->num_rows>0)
                    {
                        echo "<p>Confirmed Appointments:</p>";
                        while($row=$result->fetch_assoc())
                        {
                            ?>
                            <tbody>
                            <tr>
                            <td><?php echo $row["appointment_ID"]?></td>
                            <td><?php echo $row["time_slot_ID"]?></td>
                            <td><?php echo $row["doctor_ID"]?></td>
                            <td><?php echo $row["patient_ID"]?></td>
                            <td><?php echo $row["date"]?></td>
                            </tr>
                            </tbody>
                            <?php

                        }
                    }
                    else{
                        echo "<h1>No Appointment at the moment<h1>";
                    }
                    ?>
                    
                    
                    
        </table>
        <a href="index.html"><input type="button" value="main menu" class="btn login_btn" ></a>
        <a href="reception_dashboard.php"><input type="button" value="back" class="btn login_btn" ></a>
                </div>
                </body>
                </html>