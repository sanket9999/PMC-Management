<?php
$emp_id  = filter_input(INPUT_POST, 'emp_id');
if(!empty($emp_id))
{
    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "DBMS_Project";
    // Create connection
    $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
    if (mysqli_connect_error())
    {
    die('Connect Error ('. mysqli_connect_errno() .') mysqli_connect_error()');
    }
    else
    {
    $sql = "DELETE FROM employee WHERE employees_id = ('$emp_id')";
    if ($conn->query($sql))
    {
    echo "Record Deleted";
    }
    else{
    echo "Error: ". $sql ."
    ". $conn->error;
    }
    $conn->close();
    }
}
else
{
    echo "Employee ID should not be Empty\n";
}
?>