<?php
$Full_name = filter_input(INPUT_POST, 'fname');
$Employee_id = filter_input(INPUT_POST, 'emp_id');
$Department_id = filter_input(INPUT_POST, 'dept_id');
$Email = filter_input(INPUT_POST, 'email');
$Salary  = filter_input(INPUT_POST, 'salary');
if (!empty($Full_name))
{
if (!empty($Employee_id))
{
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "DBMS_Project";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error())
{
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else
{
$sql = "INSERT INTO employee ( Full_name, Employees_ID  ,Department_id ,Email,Salary)
values ('$Full_name','$Employee_id','$Department_id','$Email','$Salary')";
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
echo "Employee_id should not be empty";
die();
}
}
else{
echo "Full Name should not be empty";
die();
}
?>