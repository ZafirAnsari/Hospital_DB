<?php 
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'hospodb';

$conn = mysqli_connect($servername, $username, $password, $dbname);
$sql = "SELECT * FROM `doctor`";
    $result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Patient Information</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
  <table align="center" border="1px"class="table table-striped table-dark">
    <th><h3>Doctor View</h3></th>
    <tr>
      <th>doctor_ID</th>
      <th>Name</th>
      <th>gender</th>
      <th>age</th>
      <th>phone_number</th>
      <th>department_name</th>
      <th>office_number</th>
      <th>rank</th>
      <th>salary</th>
      <th>start_slot_ID</th>
      <th>end_slot_ID</th>
      <th>email</th>
      <th>bill_charges</th>
      <th>attendance</th>
    </tr>
    <?php
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
    ?>
        <tr>
          <td><?php echo $row["doctor_ID"]?></td>
          <td><?php echo $row["name"]?></td>
          <td><?php echo $row["gender"]?></td>
          <td><?php echo $row["age"]?></td>
          <td><?php echo $row["phone_number"]?></td>
          <td><?php echo $row["department_name"]?></td>
          <td><?php echo $row["office_number"]?></td>
          <td><?php echo $row["rank"]?></td>
          <td><?php echo $row["salary"]?></td>
          <td><?php echo $row["start_slot_ID"]?></td>
          <td><?php echo $row["end_slot_ID"]?></td>
          <td><?php echo $row["email"]?></td>
          <td><?php echo $row["bill_charges"]?></td>
          <td><?php echo $row["attendance"]?></td>
        </tr>
    <?php
      }
    } else {
      echo "0 results";
    }
    $conn->close();
   ?>
  </table>
</body>
</html>


