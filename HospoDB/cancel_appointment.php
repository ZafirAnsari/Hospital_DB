<?php
$appointment_ID=$_GET['appointment_ID'];
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'hospodb';

$conn = mysqli_connect($servername, $username, $password, $dbname);
//echo "i am here";

if ($conn==false) {
    echo "Connection Failed";
} else {
    $sql = "DELETE from `appointment` WHERE `appointment_ID` = $appointment_ID";
    if ($conn->query($sql) === TRUE) {
        echo "Appointment canceled successfully";
      } else {
        echo "Error deleting record: " . $conn->error;
      }
}

mysqli_close($conn);
?>
