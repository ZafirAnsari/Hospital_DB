<?php

$email=$_GET['email'];
$currentPassword = $_GET['currentPassword'];
$newPassword_1 = $_GET['newPassword_1'];
$newPassword_2 = $_GET['newPassword_2'];
$type = $_GET['type'];

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'hospodb';

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn==false) {
    echo "Connection Failed";
} else {

    $sql="select * from `$type` where `email`='$email'";


    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)==0) {
        echo "Email Entered doesn't exit. Try Again! <br>";
        //header('Location:update_patientPassword.html?passwordFail=1');
    }

    else{

        $sql="select `password` from `$type` where `email`='$email'";

    	$result = mysqli_query($conn,$sql);
    	$arr = mysqli_fetch_assoc($result);
    	$inString = implode(' ',$arr);
    	if($inString != $currentPassword){
    		echo "Passowrd entered Incorrect. Try Again. <br>";
    		//header('Location:update_patientPassword.html?passwordFail=1');
    	}
    	elseif ($newPassword_1 != $newPassword_2) {
    		echo "New password are not same. Try Again! <br>";
    		//header('Location:update_patientPassword.html?passwordFail=1');
    	}
    	else{
            $sql_pswd = "UPDATE `$type` SET `password` = '$newPassword_1' WHERE email='$email'";

            if (mysqli_query($conn, $sql_pswd)) {

              echo "Password updated successfully <br>";
            } 

            else {
              echo "Error updating record: " . mysqli_error($conn);
              echo "<br>";
            }
    	}


    }


}


?>
