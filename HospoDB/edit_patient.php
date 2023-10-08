<?php
	$EditID=$_GET['patient_ID'];

	$name=$_GET['name']; //
    $gender = $_GET['gender']; //
    $age = $_GET['age']; //
    $CNIC = $_GET['CNIC']; //
    $phone_no = $_GET['phone_no']; //
    $email = $_GET['email'];
    $department = $_GET['department']; //
    $blood_type = $_GET['blood_type'];
    $login = $_GET['password']; //

    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'hospodb';

    $conn = mysqli_connect($servername, $username, $password, $dbname);


    if ($conn==false) {
        echo "Connection Failed <br>";
    }

    else {
    //echo "connection established";
    $sql="select * from `patient` where `patient_ID`='$EditID'";

    $result = mysqli_query($conn,$sql);

    //echo $result;

    if(mysqli_num_rows($result)==0) {
        echo "Wrong credentials. <br>";
        //header('Location:doctor-login-screen.php?passwordFail=1');
    } 
    else {

        if ($name != ""){
            $sql_name = "UPDATE `patient` SET `name` = '$name' WHERE patient_ID='$EditID'";

            if (mysqli_query($conn, $sql_name)) {

              echo "Name updated successfully <br>";
            } 

            else {

              echo "Error updating record: " . mysqli_error($conn);
              echo "<br>";
            }
        }
        if ($gender != ""){
            $sql_gender = "UPDATE `patient` SET `gender` = '$gender' WHERE patient_ID='$EditID'";

            if (mysqli_query($conn, $sql_gender)) {

              echo "Gender updated successfully <br>";
            } 

            else {

              echo "Error updating record: " . mysqli_error($conn);
              echo "<br>";
            }
        }
        if ($age != ""){
            $sql_age = "UPDATE `patient` SET `age` = $age WHERE patient_ID='$EditID'";

            if (mysqli_query($conn, $sql_age)) {

              echo "Age updated successfully <br>";
            } 

            else {

              echo "Error updating record: " . mysqli_error($conn);
              echo "<br>";
            }
        }
        if ($phone_no != ""){
            $sql_phoneNum = "UPDATE `patient` SET `phone_number` = '$phone_no' WHERE patient_ID='$EditID'";

            if (mysqli_query($conn, $sql_phoneNum)) {

              echo "Phone Number updated successfully <br>";
            } 

            else {

              echo "Error updating record: " . mysqli_error($conn);
              echo "<br>";
            }
        }
        if ($department != "NULL"){
            $sql_dept = "UPDATE `patient` SET `department_name` = '$department' WHERE patient_ID='$EditID'";

            if (mysqli_query($conn, $sql_dept)) {

              echo "Department updated successfully <br>";
            } 

            else {

              echo "Error updating record: " . mysqli_error($conn);
              echo "<br>";
            }
        }
        if ($CNIC != ""){
            $sql_CNIC = "UPDATE `patient` SET `CNIC` = '$CNIC' WHERE patient_ID='$EditID'";

            if (mysqli_query($conn, $sql_CNIC)) {

              echo "CNIC updated successfully <br>";
            } 

            else {

              echo "Error updating record: " . mysqli_error($conn);
              echo "<br>";
            }
        }
        if ($login != ""){
            $sql_pswd = "UPDATE `patient` SET `password` = '$login' WHERE patient_ID='$EditID'";

            if (mysqli_query($conn, $sql_pswd)) {

              echo "Password updated successfully <br>";
            } 

            else {

              echo "Error updating record: " . mysqli_error($conn);
              echo "<br>";
            }
        }
        if ($blood_type != "NULL"){
            $sql_bloodType = "UPDATE `patient` SET `blood_type` = $blood_type WHERE patient_ID='$EditID'";

            if (mysqli_query($conn, $sql_bloodType)) {

              echo "Blood Type updated successfully <br>";
            } 

            else {

              echo "Error updating record: " . mysqli_error($conn);
              echo "<br>";
            }
        }
        if ($email != ""){
            $sql_email = "UPDATE `patient` SET `email` = '$email' WHERE patient_ID='$EditID'";

            if (mysqli_query($conn, $sql_email)) {

              echo "Email updated successfully <br>";
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