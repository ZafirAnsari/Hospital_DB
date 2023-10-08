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
    $sql = "SELECT `patient_ID` from `patient` WHERE `patient_ID` = '$patient_ID'";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0) {
        $sql_ = "SELECT `bill_charges`, `occupied` from `room` WHERE `room_number`= (SELECT `room_number` from `patient` WHERE `patient_ID` = '$patient_ID')";
        $result2 = mysqli_query($conn, $sql_);
        if(mysqli_num_rows($result2) > 0) {
            while($row = $result2->fetch_assoc()) {
                if($row["occupied"] == 1) {
                    $bill = $row["bill_charges"];
                    $sql__ = "UPDATE `room` SET `occupied` = 0 WHERE `room_number`= (SELECT `room_number` from `patient` WHERE `patient_ID` = '$patient_ID')";
                    if ($conn->query($sql__) === TRUE) {
                        $sqlp = "UPDATE `patient` SET `room_number` = 0 WHERE `patient_ID` = '$patient_ID'";
                        // echo "Record updated successfully";
                        if($conn->query($sqlp) === TRUE) {
                            // echo "Record updated successfully\n";
                            $sql_insert = "INSERT INTO `charges and billing` (`bill_charges`, `patient_ID`, `category`, `date_`) VALUES ('$bill', '$patient_ID', 'R', '$date_')";
                            if ($conn->query($sql_insert) === TRUE) {
                                // echo "Bill charges inserted successfully";
                                // header('Location:view_charges_and_billing.php');
                            } else {
                                echo "Error inserting record: " . $conn->error;
                            }
                            echo "The room bill is: " . $bill;
                            // header('Location:view_charges_and_billing.php?bill='$bill'');
                        } else {
                            echo "Error Updating Record";
                        }
                      } else {
                        echo "Error updating record: " . $conn->error;
                    }
                }
                else {
                    echo "Room is not checked out.";
                }
            }
        } else {
            echo "Room charges do not exist";
        }
    } else {
        echo "Patient ID does not exist.";
    }
}

mysqli_close($conn);
?>
