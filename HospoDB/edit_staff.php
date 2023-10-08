<?php

    $EditID=$_GET['staff_id'];

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
        $sql="select * from `staff` where `staff_ID`='$EditID'";

        $result = mysqli_query($conn,$sql);


        if(mysqli_num_rows($result)==0) {
            echo "Wrong credentials. <br>";
            //header('Location:doctor-login-screen.php?passwordFail=1');
        } 
        else {

            if ($name != ""){
                $sql_name = "UPDATE `staff` SET `name` = '$name' WHERE staff_ID='$EditID'";

                if (mysqli_query($conn, $sql_name)) {

                  echo "Name updated successfully <br>";
                } 

                else {

                  echo "Error updating record: " . mysqli_error($conn);
                  echo "<br>";
                }
            }

            if ($email != ""){
                $sql_name = "UPDATE `staff` SET `email` = '$email' WHERE staff_ID='$EditID'";

                if (mysqli_query($conn, $sql_name)) {

                  echo "Email updated successfully <br>";
                } 

                else {

                  echo "Error updating record: " . mysqli_error($conn);
                  echo "<br>";
                }
            }

            if ($job_description != "NULL"){
                $sql_job = "UPDATE `staff` SET `job_description` = '$job_description' WHERE staff_ID='$EditID'";

                if (mysqli_query($conn, $sql_job)) {

                  echo "Job Description updated successfully <br>";
                } 

                else {

                  echo "Error updating record: " . mysqli_error($conn);
                  echo "<br>";
                }
            }

            if ($login != ""){
                $sql_pswd = "UPDATE `staff` SET `password` = '$login' WHERE staff_ID='$EditID'";

                if (mysqli_query($conn, $sql_pswd)) {

                  echo "Password updated successfully <br>";
                } 

                else {

                  echo "Error updating record: " . mysqli_error($conn);
                  echo "<br>";
                }
            }

            if ($salary != ""){
                $sql_salary = "UPDATE `staff` SET `salary` = $salary WHERE staff_ID='$EditID'";

                if (mysqli_query($conn, $sql_salary)) {

                  echo "Salary updated successfully <br>";
                } 

                else {

                  echo "Error updating record: " . mysqli_error($conn);
                  echo "<br>";
                }
            }

    }
    mysqli_close($conn);

}

?>