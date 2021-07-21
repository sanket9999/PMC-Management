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
    <td>Department_id</td>
    <td>Department_name</td>
    

  </tr>
<?php

include "citizen_insert_display.php"; // Using database connection file here

$records = mysqli_query($db,"select * from department"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['Department_id']; ?></td>
    <td><?php echo $data['Department_name']; ?></td>
    
  </tr>	
<?php
}
?>
</table>

<?php mysqli_close($db); // Close connection ?>
<button onclick="document.location='menu.html'">Go to Homepage</button>
</body>
</html>