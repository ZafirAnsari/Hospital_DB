<?php

session_start();
$patientsid=$_SESSION['patient_info_id'];
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'hospodb';

$conn = mysqli_connect($servername, $username, $password, $dbname);
//echo "i am here";

if ($conn==false) {
    echo "Connection Failed";
} 
$sql="select appointment_ID,time_slot_ID,doctor_ID,patient_ID,date from appointment where patient_ID=$patientsid";
    $result=$conn->query($sql);
$sql1="select * from patient where patient_ID=$patientsid";
    $answer=$conn->query($sql1);
$sql2="select room_number from patient where patient_ID=$patientsid and (room_number IS NOT NULL or room_number!='0')";
    $result2=$conn->query($sql2);
if($result2->num_rows>0)
{
    while($row=$result2->fetch_assoc()){
        $room_n=$row["room_number"];
        }
    $sql3="select * from room where room_number=$room_n";
        $result3=$conn->query($sql3);

}
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
        
                </div>
                <br>
                <br>
                <br>
                <div class="container">
        <h2>Information</h2>
        
      
        <table class ="table table-hover">
            <thead>
                <tr>
                    <th>patient_ID</th>
                    <th>name</th>
                    <th>gender</th>
                    <th>CNIC</th>
                    <th>phone number</th>
                    <th>email</th>
                    <th>blood group</th>
                    <th>room number</th>
                    <th>department name</th>
                    <th>age</th>
                    <th>password</th>
                </tr>
            </thead>
            
                
                    <?php
                    if($answer->num_rows>0)
                    {
                        //echo "<p>Confirmed Appointments:</p>";
                        while($row=$answer->fetch_assoc())
                        {
                            ?>
                            <tbody>
                            <tr>
                            <td><?php echo $row["patient_ID"]?></td>
                            <td><?php echo $row["name"]?></td>
                            <td><?php echo $row["gender"]?></td>
                            <td><?php echo $row["CNIC"]?></td>
                            <td><?php echo $row["phone_number"]?></td>
                            <td><?php echo $row["email"]?></td>
                            <td><?php echo $row["blood_type"]?></td>
                            <td><?php echo $row["room_number"]?></td>
                            <td><?php echo $row["department_name"]?></td>
                            <td><?php echo $row["age"]?></td>
                            <td><?php echo $row["Password"]?></td>
                            
                            </tr>
                            </tbody>
                            <?php

                        }
                    }
                    else{
                        echo "<h1>invalid info<h1>";
                    }
                    ?>
                    
                    
                    
        </table>
        
                </div>
                <br>
                <br>
                <br>
                <div class="container">
        <h2>Room Information</h2>
        
      
        <table class ="table table-hover">
            <thead>
                <tr>
                    <th>room number</th>
                    <th>category</th>
                    <th>staff ID</th>
                    <th>contact</th>
                    <th>bill charges</th>
                    
                </tr>
            </thead>
            
                
                    <?php
                    if($result2->num_rows>0)
                    {

                        //echo "<p>Confirmed Appointments:</p>";
                        while($row=$result3->fetch_assoc())
                        {
                            ?>
                            <tbody>
                            <tr>
                            <td><?php echo $row["room_number"]?></td>
                            <td><?php echo $row["category"]?></td>
                            <td><?php echo $row["staff_ID"]?></td>
                            <td><?php echo $row["contact"]?></td>
                            <td><?php echo $row["bill_charges"]?></td>
                            
                            
                            </tr>
                            </tbody>
                            <?php

                        }
                    }
                    else{
                        echo "<h1>Room not used by the patient<h1>";
                    }
                    ?>
                    
                    
                    
        </table>
        <a href="index.html"><input type="button" value="main menu" class="btn login_btn" ></a>
        <a href="reception_dashboard.php"><input type="button" value="back" class="btn login_btn" ></a>
                </div>
                </body>
                </html>
                <?php
                mysqli_close($conn);
                ?>