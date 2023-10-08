<?php

$loginEmail=$_GET['loginEmail'];
$loginPassword=$_GET['loginPassword'];
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'hospodb';

$conn = mysqli_connect($servername, $username, $password, $dbname);
//echo "i am here";

if ($conn==false) {
    echo "Connection Failed";
} else {
    //echo "connection established";
    $sql="select `staff_ID` from `staff` where `email`='$loginEmail' and `password`='$loginPassword' and `job_description`='Receptionist'";

    $result = mysqli_query($conn,$sql);

        if(mysqli_num_rows($result)==0) {
            echo "Wrong credentials.";
            header('Location:receptionist-login-screen.php?passwordFail=1');
        } else {

            //session_start();
            //$_SESSION['login']=1;

            header('Location:reception_dashboard.php');
        }
}

mysqli_close($conn);

?>