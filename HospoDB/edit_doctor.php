<?php

$EditID=$_GET['doctor_id'];

$name=$_GET['name'];
$gender = $_GET['gender'];
$age = $_GET['age'];
$phone_no = $_GET['phone_no'];
$company_email = $_GET['company_email'];
$department = $_GET['department'];
$office_no = $_GET['office_no'];
$rank = $_GET['rank'];
$login = $_GET['login'];
$working_hours_1 = $_GET['working_hours_1'];
$working_hours_2 = $_GET['working_hours_2'];
$salary = $_GET['salary'];
$charges = $_GET['charges'];

//echo $EditID;

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'hospodb';

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn==false) {
    echo "Connection Failed";
} else {
    //echo "connection established";
    $sql="select * from `doctor` where `doctor_ID`='$EditID'";

    $result = mysqli_query($conn,$sql);

    //echo $result;

    if(mysqli_num_rows($result)==0) {
        echo "Wrong credentials. <br>";
        //header('Location:doctor-login-screen.php?passwordFail=1');
    } 
    else {

        if ($name != ""){
            $sql_name = "UPDATE `doctor` SET `name` = '$name' WHERE doctor_ID='$EditID'";

            if (mysqli_query($conn, $sql_name)) {

              echo "Name updated successfully <br>";
            } 

            else {

              echo "Error updating record: " . mysqli_error($conn);
              echo "<br>";
            }
        }
        if ($gender != ""){
            $sql_gender = "UPDATE `doctor` SET `gender` = '$gender' WHERE doctor_ID='$EditID'";

            if (mysqli_query($conn, $sql_gender)) {

              echo "Gender updated successfully <br>";
            } 

            else {

              echo "Error updating record: " . mysqli_error($conn);
              echo "<br>";
            }
        }
        if ($age != ""){
            $sql_age = "UPDATE `doctor` SET `age` = $age WHERE doctor_ID='$EditID'";

            if (mysqli_query($conn, $sql_age)) {

              echo "Age updated successfully <br>";
            } 

            else {

              echo "Error updating record: " . mysqli_error($conn);
              echo "<br>";
            }
        }
        if ($phone_no != ""){
            $sql_phoneNum = "UPDATE `doctor` SET `phone_number` = '$phone_no' WHERE doctor_ID='$EditID'";

            if (mysqli_query($conn, $sql_phoneNum)) {

              echo "Phone Number updated successfully <br>";
            } 

            else {

              echo "Error updating record: " . mysqli_error($conn);
              echo "<br>";
            }
        }
        if ($department != "NULL"){
            $sql_dept = "UPDATE `doctor` SET `department_name` = '$department' WHERE doctor_ID='$EditID'";

            if (mysqli_query($conn, $sql_dept)) {

              echo "Department updated successfully <br>";
            } 

            else {

              echo "Error updating record: " . mysqli_error($conn);
              echo "<br>";
            }
        }
        if ($office_no != ""){
            $sql_officeNo = "UPDATE `doctor` SET `office_number` = '$office_no' WHERE doctor_ID='$EditID'";

            if (mysqli_query($conn, $sql_officeNo)) {

              echo "Office Number updated successfully <br>";
            } 

            else {

              echo "Error updating record: " . mysqli_error($conn);
              echo "<br>";
            }
        }
        if ($login != ""){
            $sql_pswd = "UPDATE `doctor` SET `password` = '$login' WHERE doctor_ID='$EditID'";

            if (mysqli_query($conn, $sql_pswd)) {

              echo "Password updated successfully <br>";
            } 

            else {

              echo "Error updating record: " . mysqli_error($conn);
              echo "<br>";
            }
        }
        if ($rank != "NULL"){
            $sql_rank = "UPDATE `doctor` SET `rank` = '$rank' WHERE doctor_ID='$EditID'";

            if (mysqli_query($conn, $sql_rank)) {

              echo "Rank updated successfully <br>";
            } 

            else {

              echo "Error updating record: " . mysqli_error($conn);
              echo "<br>";
            }
        }
        if ($salary != ""){
            $sql_salary = "UPDATE `doctor` SET `salary` = $salary WHERE doctor_ID='$EditID'";

            if (mysqli_query($conn, $sql_salary)) {

              echo "Salary updated successfully <br>";
            } 

            else {

              echo "Error updating record: " . mysqli_error($conn);
              echo "<br>";
            }
        }
        if ($working_hours_1 != "NULL"){
            $sql_timeSlot_1 = "UPDATE `doctor` SET `start_slot_ID` = '$working_hours_1' WHERE doctor_ID='$EditID'";

            if (mysqli_query($conn, $sql_timeSlot_1)) {

              echo "Start Slot updated successfully <br>";
            } 

            else {

              echo "Error updating record: " . mysqli_error($conn);
              echo "<br>";
            }
        }
        if ($working_hours_2 != "NULL"){
            $sql_timeSlot_2 = "UPDATE `doctor` SET `end_slot_ID` = '$working_hours_2' WHERE doctor_ID='$EditID'";

            if (mysqli_query($conn, $sql_timeSlot_2)) {

              echo "End Slot updated successfully <br>";
            } 

            else {

              echo "Error updating record: " . mysqli_error($conn);
              echo "<br>";
            }
        }
        if ($company_email != ""){
            $sql_email = "UPDATE `doctor` SET `email` = '$company_email' WHERE doctor_ID='$EditID'";

            if (mysqli_query($conn, $sql_email)) {

              echo "Email updated successfully <br>";
            } 

            else {

              echo "Error updating record: " . mysqli_error($conn);
              echo "<br>";
            }
        }
        if ($charges != ""){
            $sql_charges = "UPDATE `doctor` SET `bill_charges` = $charges WHERE doctor_ID='$EditID'";

            if (mysqli_query($conn, $sql_charges)) {

              echo "Charges updated successfully <br>";
            } 

            else {

              echo "Error updating record: " . mysqli_error($conn);
              echo "<br>";
            }
        }

   }
}

mysqli_close($conn);

?>