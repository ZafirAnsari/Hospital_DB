<?php
session_start();
$patientID=$_SESSION['pa_id'];
//$patient_password=$_POST['patientPassword'];
$room_category=$_POST['room_cat'];
$room_numb=$_POST['room_num'];
$contact_num=$_POST['patient_contact'];
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
    $sql="select patient_ID,Password,room_number,name from patient where patient_ID=$patientID and (room_number IS NULL or room_number='0')";

    $answer = mysqli_query($conn,$sql);
        if(mysqli_num_rows($answer)==0) {
            echo "Wrong credentials.";
            // echo $result;
            // echo $loginPassword;
            //header('Location:admin-login-screen.php?passwordFail=1');
            header('Location:room_Apply1.php?passwordFail=1');
        } else {
            //session_start();
            //$_SESSION['login']=1;
            //header('Location:admin_dashboard.php');
            // if ($sql["Password"]===NULL)
            // {
            //     $sql1=
            // }
            $sql1="select occupied,contact from room where room_number=$room_numb and category='$room_category' and occupied='0'";
            $result = mysqli_query($conn,$sql1);
            if(mysqli_num_rows($result)==0) {
                echo "Wrong room";
                header('Location:room_Apply1.php?roomFail=1');
            }
            else{
                $sql2="UPDATE patient SET room_number=$room_numb where patient_ID=$patientID";
                $sql3="UPDATE room SET occupied='1',contact=$contact_num where room_number=$room_numb";
                if ($conn->query($sql3) === TRUE) {
                    echo "Record updated successfully";
                  } else {
                    echo "Error updating record: " . $conn->error;
                  }
                  if ($conn->query($sql2) === TRUE) {
                    echo "Record updated successfully";
                  } else {
                    echo "Error updating record: " . $conn->error;
                  }
                  
                echo "Succesfull";
                while($row=$answer->fetch_assoc()){
                $p_name=$row["name"];
                }
                $_SESSION['p_name']=$p_name;
                header('Location:room_Apply1.php?success=1');
                //echo "<p>".$p_name."</p>";
                //print_r($_SESSION);
            }

        }
}

mysqli_close($conn);

?>

