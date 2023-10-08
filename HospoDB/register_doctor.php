<?php

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
 
    $sql = "INSERT INTO `doctor` (`name`, `gender`, `age`, `phone_number`, `department_name`, `office_number`, `password`, `rank`, `salary`, `start_slot_ID`, `end_slot_ID`, `email`, `bill_charges`)  VALUES ('$name','$gender', $age , '$phone_no','$department', '$office_no', '$login','$rank', $salary , $working_hours_1, $working_hours_2, '$company_email', $charges)";
    $sql1 = "SELECT `doctor_ID` FROM `doctor` WHERE `email`='$company_email'";
    $result = mysqli_query($conn,$sql1);
    if (mysqli_num_rows($result)==0) {
        echo "Email is available <br>";
        if (mysqli_query($conn, $sql)) {
            echo "Query Successful <br>";
        } else {
            echo "Query failed <br>";
        }
    } else {
        header('Location:doctor_form.php?emailNotAvailable=1');
    }
    

    mysqli_close($conn);




?>
