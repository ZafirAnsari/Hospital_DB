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
    	$id = $_GET['id'];
	    $job = $_GET['job'];
	    if($job == 'Doctor')
	    {
	    	$sql = "UPDATE `doctor` SET `attendance` = `attendance` + 1 WHERE `doctor_ID` ='$id'";
	    	$check = "SELECT * FROM `doctor` WHERE doctor_ID = '$id' ";
	    	$result = mysqli_query($conn, $check);	
	    	if(mysqli_num_rows($result) == 0)
	    	{
	    		echo "Invalid doctor ID <br>";
	        	header('Location:staff_attendance.php?invalidIdDoctor=1');
	    	}
	    	else
	    	{
	    		$result = mysqli_query($conn, $sql);
	    	}
	    }
	    else
	    {
	    	$sql = "UPDATE `staff` SET `attendance` = `attendance` + 1 WHERE `staff_ID` = 1";
	    	$check = "SELECT * FROM `staff` WHERE staff_ID = '$id' ";
	    	$result = mysqli_query($conn, $check);	
	    	if(mysqli_num_rows($result) == 0)
	    	{
	    		echo "Invalid staff ID <br>";
	        	header('Location:staff_attendance.php?invalidIdStaff=1');
	    	}
	    	else
	    	{
	    		$result = mysqli_query($conn, $sql);
	    	}
	    }
    	
    }
     mysqli_close($conn);
?>