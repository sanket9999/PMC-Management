<?php
$Project_No  = filter_input(INPUT_POST, 'Project_NO');
if(!empty($Project_No))
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
    $sql = "DELETE FROM Project WHERE Project_No = ('$Project_No')";
    if ($conn->query($sql))
    {
    echo "Project Record Deleted";
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
    echo "Project Number should not be Empty\n";
}
?>