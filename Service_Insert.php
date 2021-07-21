<?php
$Service_Name = filter_input(INPUT_POST, 'Service_Name');
$Service_ID = filter_input(INPUT_POST, 'Service_ID');
$Total_Amount = filter_input(INPUT_POST, 'Total_Amount');
if (!empty($Service_Name)){
if (!empty($Service_ID)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "DBMS_Project";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO service (Service_Name, Service_ID, Total_Amount)
values ('$Service_Name','$Service_ID','$Total_Amount')";
if ($conn->query($sql)){
echo "New record is inserted sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "Service ID should not be empty";
die();
}
}
else{
echo "Service Name should not be empty";
die();
}
?> 