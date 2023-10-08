<?php

    $name=$_GET['name'];
    $gender = $_GET['gender'];
    $age = $_GET['age'];
    $CNIC = $_GET['CNIC'];
    $phone_no = $_GET['phone_no'];
    $email = $_GET['email'];
    $department = $_GET['department'];
    $blood_type = $_GET['blood_type'];
    $login = $_GET['password'];

    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'hospodb';

    $conn = mysqli_connect($servername, $username, $password, $dbname);


    if ($conn==false) {
        echo "Connection Failed <br>";
    }
    else{
        echo "Connection successful <br>";
    }
    
    //do anything to the database, you have access

    $sql = "INSERT INTO `patient` (`name`, `gender`, `CNIC`, `phone_number`, `email`, `blood_type`, `department_name`, `age`, `Password`)  VALUES ('$name','$gender', '$CNIC' , '$phone_no','$email', '$blood_type', '$department', $age , '$login')";


    $sql1 = "SELECT `patient_ID` FROM `patient` WHERE `CNIC`='$CNIC'";
    $result = mysqli_query($conn,$sql1);

    if (mysqli_num_rows($result)==0) {

        if (mysqli_query($conn, $sql)) {
            echo "Query Successful <br>";
        } 

        else {
            echo "Query failed <br>";
        }

    } 

    else 
    {
        header('Location:doctor_form.php?emailNotAvailable=1');
    }
    

    mysqli_close($conn);




?>