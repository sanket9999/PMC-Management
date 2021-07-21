<?php
$Full_name = filter_input(INPUT_POST, 'fname');
$Gender = filter_input(INPUT_POST, 'gender');
$Phone_number = filter_input(INPUT_POST, 'Phone_number');
$Birth_date = filter_input(INPUT_POST, 'Birth_date');
$Aadhar_number  = filter_input(INPUT_POST, 'Aadhaar_number');
if (!empty($Full_name)){
if (!empty($Gender)){
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
$sql = "INSERT INTO citizens (Full_name, Gender,Phone_number,Birth_date,Aadhar_number)
values ('$Full_name','$Gender','$Phone_number','$Birth_date','$Aadhar_number')";
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
echo "Password should not be empty";
die();
}
}
else{
echo "Username should not be empty";
die();
}
?>