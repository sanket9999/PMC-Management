<?php
$Aadhar_number  = filter_input(INPUT_POST, 'Aadhaar_number');
if (!empty($Aadhar_number)){
if (!empty($Aadhar_number)){
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
$sql = "DELETE FROM CITIZENS WHERE Aadhar_number = ('$Aadhar_number')";
if ($conn->query($sql)){
echo "Record Deleted";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "Aadhaar Number  should not be empty";
die();
}
}
else{
echo "Aadhaar Number  should not be empty";
die();
}
?>