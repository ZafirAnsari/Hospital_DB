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

    	$patient = $_GET['patient']; 
    	$slot = $_GET['slot'];
    	$appointment_date = $_SESSION["date"];
	    $doctor = $_SESSION['doctor'];

	    $sql = "INSERT INTO `appointment` (`appointment_ID`, `time_slot_ID`,`doctor_ID`, `patient_ID`, `date`) VALUES (NULL, '$slot', '$doctor', '$patient', '$appointment_date')";
	    $check = "SELECT * FROM `appointment` WHERE doctor_ID = '$doctor' AND time_slot_ID = '$slot' AND `date` = '$appointment_date' ";
	    $rcheck = mysqli_query($conn,$check);
	    if(mysqli_num_rows($rcheck)==0)
	    { 
		    $result = mysqli_query($conn, $sql);
		    if ($result) {
	            echo "Query Successful";
	        } else {
	            echo "Query failed";
	        }
    	}
        else
        {
            echo "slot occupied";
            header('Location:set_app.php?slotOccupied=1');
        }


    }
    mysqli_close($conn);
?>