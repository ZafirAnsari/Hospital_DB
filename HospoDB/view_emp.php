<?php 
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'hospodb';

$conn = mysqli_connect($servername, $username, $password, $dbname);
$sql = "SELECT `staff_ID`, `name`, `job_description`, `salary` FROM `staff`";
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
  <table align="center" border="1px" style="width:500px;"class="table table-striped table-dark">
  <th><h3 class="text-center">Employee View</h3></th>
    <tr>
      <th>Staff ID</th>
      <th>Name</th>
      <th>Job Description</th>
      <th>Salary</th>
    </tr>
    <?php
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
    ?>
        <tr>
          <td><?php echo $row["staff_ID"]?></td>
          <td><?php echo $row["name"]?></td>
          <td><?php echo $row["job_description"]?></td>
          <td><?php echo $row["salary"]?></td>
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


