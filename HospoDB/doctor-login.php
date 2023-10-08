<?php

$loginEmail=$_GET['email'];
$loginPassword=$_GET['loginPassword'];
$temp ="Amna";

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
    $sql="select * from `doctor` where `email`='$loginEmail' and `password`='$loginPassword' ";

    $result = mysqli_query($conn,$sql);

        if(mysqli_num_rows($result)==0) {
            echo "Wrong credentials.";
            header('Location:doctor-login-screen.php?passwordFail=1');
        } else {
            header('Location:doctor_dashboard.php');
        }
}

mysqli_close($conn);

?>