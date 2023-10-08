<?php

$loginEmail=$_GET['loginEmail'];
//$loginPassword=$_GET['loginPassword'];
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
    $sql="select `patient_ID` from `patient` where `email`='$loginEmail'  ";

    $result = mysqli_query($conn,$sql);

        if(mysqli_num_rows($result)==0) {
            echo "Wrong credentials.";
            header('Location:view_patient_info.php?emailFail=1');
        } else {
            while($row=$result->fetch_assoc()){
                $p_identity=$row["patient_ID"];
                }
            session_start();
            $_SESSION['patient_info_id']=$p_identity;

            header('Location:view_patient_info2.php');
        }
}

mysqli_close($conn);

?>