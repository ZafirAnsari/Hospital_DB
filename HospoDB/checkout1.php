<?php
session_start();
$loginID=$_SESSION['pa_id'];
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
    $sql="select room_number from patient where patient_ID=$loginID and (room_number IS NOT NULL or room_number!='0')";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)==0) {
        echo "not have a room";
        header('Location:patient_dashboard.php?roomfail=1');
    }
    else{
        echo "here";
        while($row=$result->fetch_assoc()){
            $room_n=$row["room_number"];
            }
        $sql1="UPDATE room SET occupied='2' where room_number=$room_n";
        if ($conn->query($sql1) === TRUE) {
            echo "Record updated successfully";
          } else {
            echo "Error updating record: " . $conn->error;
          }
          header('Location:patient_dashboard.php?roomsuccess=1');
    }
}
mysqli_close($conn);
?>