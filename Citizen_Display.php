<!DOCTYPE html>
<html>
<head>
  <title>Display all records of Citizen from Database</title>
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

<h2>Citizens Details</h2>
<table border="2" align="center">
  <tr>
    <td>Full Name</td>
    <td>Gender</td>
    <td>Phone Number</td>
    <td>Birth Date</td>
    <td>Aadhaar Number</td>

  </tr>
<?php

include "citizen_insert_display.php"; // Using database connection file here

$records = mysqli_query($db,"select * from Citizens"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['Full_name']; ?></td>
    <td><?php echo $data['gender']; ?></td>
    <td><?php echo $data['phone_number']; ?></td>
    <td><?php echo $data['Birth_date']; ?></td>
    <td><?php echo $data['Aadhar_number']; ?></td>  
  </tr>	
<?php
}
?>
</table>

<?php mysqli_close($db); // Close connection ?>
<button onclick="document.location='Citizen_Insert.html'">Click Me</button>
</body>
</html>