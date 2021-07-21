<?php
$First_name = filter_input(INPUT_POST, 'fname');
$Last_name = filter_input(INPUT_POST, 'lname');
$Subject = filter_input(INPUT_POST, 'subject');
if (!empty($First_name)){
if (!empty($Last_name)){
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
$sql = "INSERT INTO Contact_us(First_name, Last_name, subject)
values ('$First_name','$Last_name','$Subject')";
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