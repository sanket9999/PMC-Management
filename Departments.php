<?php
$Department_Name = filter_input(INPUT_POST, 'Department_Name');
$Department_ID = filter_input(INPUT_POST, 'Department_ID');
if (!empty($Department_Name)){
if (!empty($Department_ID  )){
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
$sql = "INSERT INTO Department (Department_Name, Department_ID)
values ('$Department_Name','$Department_ID')";
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
echo "Department ID should not be empty";
die();
}
}
else{
echo "Department Name should not be empty";
die();
}
?>  