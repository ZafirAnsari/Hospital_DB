<?php
//include "doctor-login.php";
//$variable1=$_POST['btn1'];
//Secho $variable1;

//$ID=$_GET['ID'];

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'hospodb';

$conn = mysqli_connect($servername, $username, $password, $dbname);


$sql="select `staff_ID` from `staff` where `job_description`='Maintenance'";

$result = mysqli_query($conn,$sql);

$arr = mysqli_fetch_all($result); //display result into array form

//print_r($arr[0]);

$arrayLength = sizeof($arr);

for ($i = 0; $i < $arrayLength; $i = $i+1){
	$inString = implode(' ',$arr[$i]); //convert array into string 
	echo $inString;
	echo "<br>";
}
?>