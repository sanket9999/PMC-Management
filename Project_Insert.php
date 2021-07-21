<?php
$project_name = filter_input(INPUT_POST, 'project_name');
$project_NO = filter_input(INPUT_POST, 'project_NO');
$Budget = filter_input(INPUT_POST, 'Budget');
$p_company = filter_input(INPUT_POST, 'p_company');
$Start_Date  = filter_input(INPUT_POST, 'Start_Date');
$End_Date  = filter_input(INPUT_POST, 'End_Date');
if (!empty($project_name)){
if (!empty($project_NO)){
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
$sql = "INSERT INTO Project (Project_name , Project_No ,Budget ,p_company ,start_date,end_date  )
values ('$project_name','$project_NO','$Budget','$p_company','$Start_Date','$End_Date')";
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
echo "Project Number should not be empty";
die();
}
}
else{
echo "Project Name should not be empty";
die();
}
?>