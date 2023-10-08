<?php
$patient_ID=$_GET['patient_ID'];
$date_ = $_GET['date'];
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'hospodb';

$conn = mysqli_connect($servername, $username, $password, $dbname);
//echo "i am here";

if ($conn==false) {
    echo "Connection Failed";
} else {
    $sql = "SELECT * from `appointment` WHERE `patient_ID` = '$patient_ID' AND `date` = '$date_'";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0) {
        while($row = $result->fetch_assoc()) {
            $doc_ID = $row["doctor_ID"];
            $sql_charge = "SELECT `bill_charges` from `doctor` WHERE `doctor_ID` = $doc_ID";
            $result2 = mysqli_query($conn,$sql_charge);
            if(mysqli_num_rows($result2)>0) {
                $row2 = $result2->fetch_assoc();
                $bill = $row2["bill_charges"];
                echo "Your bill is: ". $row2['bill_charges'];
                $sql_insert = "INSERT INTO `charges and billing` (`bill_charges`, `patient_ID`, `category`, `date_`) VALUES ('$bill', '$patient_ID', 'A', '$date_')";
                if ($conn->query($sql_insert) === TRUE) {
                    // echo "Bill charges inserted successfully";
                    // header('Location:view_charges_and_billing.php');
                } else {
                    echo "Error inserting record: " . $conn->error;
                }
                $app_ID = $row['appointment_ID'];
                $sqla = "DELETE from `appointment` WHERE `appointment_ID` = $app_ID";
                if ($conn->query($sqla) === TRUE) {
                } else {
                    echo "Error deleting record: " . $conn->error;
                }
            } else{
                echo "no doc";
            }
        }
    } else {
        echo "Wrong Input.";
    }
}

mysqli_close($conn);
?>
