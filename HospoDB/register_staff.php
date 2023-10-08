<?php

    $name=$_GET['name'];
    $email = $_GET['email'];
    $login = $_GET['password'];
    $salary = $_GET['salary'];
    $job_description = $_GET['job_description'];


    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'hospodb';

    $conn = mysqli_connect($servername, $username, $password, $dbname);


    if ($conn==false) {
        echo "Connection Failed";
    }
    else{
        echo "Connection successful";
    }
    
    //do anything to the database, you have access
 
    $sql = "INSERT INTO `staff` (`name`, `email`, `job_description`, `password`, `salary`)  VALUES ('$name', '$email', '$job_description','$login', $salary)";
    
    
    if (mysqli_query($conn, $sql)) {
        echo "Query Successful";
    } else {
        echo "Query failed";
    }
    

    mysqli_close($conn);




?>
