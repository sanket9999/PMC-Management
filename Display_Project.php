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
    <td>Project Name</td>
    <td>ProjectNo</td>
    <td>Budget</td>
    <td>Project Company</td>
    <td>Start Date</td>
    <td>End Date</td>


  </tr>
<?php

include "citizen_insert_display.php"; // Using database connection file here

$records = mysqli_query($db,"select * from project"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['Project_name']; ?></td>
    <td><?php echo $data['Project_No']; ?></td>
    <td><?php echo $data['Budget']; ?></td>
    <td><?php echo $data['p_company']; ?></td>
    <td><?php echo $data['start_date']; ?></td>  
    <td><?php echo $data['end_date']; ?></td>  
  </tr>	
<?php
}
?>
</table>

<?php mysqli_close($db); // Close connection ?>Click 
<button onclick="document.location='Citizen_Insert.html'">Go to Homepage</button>
</body>
</html>