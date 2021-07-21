<!DOCTYPE html>
<html>
<head>
  <title>Display all records of Employees from Database</title>
  <style>
   body{
        margin: 0px;
        padding: 0px;
        background: url(img/23.jpg);
        height: 1000px;
    }

    .center {
  margin-left: auto;
  margin-right: auto;
}
  </style>
</head>
<body>

<h2>Employee Details</h2>

<table border="2">
  <tr>
    <td>Full Name</td>
    <td>Employee_ID</td>
    <td>Email</td>
    <td>Salary</td>
    <td>Department_id</td>

  </tr>

<?php

include "citizen_insert_display.php"; // Using database connection file here

$records = mysqli_query($db,"select * from Employee"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['Full_Name']; ?></td>
    <td><?php echo $data['Employees_ID']; ?></td>
    <td><?php echo $data['Email']; ?></td>
    <td><?php echo $data['Salary']; ?></td>
    <td><?php echo $data['Department_id']; ?></td>  
  </tr>	
<?php
}
?>
</table>

<?php mysqli_close($db); // Close connection ?>

</body>
</html>