<?php
$Employees_ID  = filter_input(INPUT_POST, 'Employee_ID');
$Salary = filter_input(INPUT_POST, 'Salary');


if(!empty($Employees_ID))
{
    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "DBMS_Project";
// Create connection
   
    if(!empty($Salary) )
    {
        $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
        if (mysqli_connect_error()){
            die('Connect Error ('. mysqli_connect_errno() .') '
            . mysqli_connect_error());
            }
            else{
            $sql = "Update employee set Salary  = ('$Salary') where Employees_ID = ('$Employees_ID')";
            if ($conn->query($sql)){
            echo "Record Updated Successfully\n";
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
        echo "Full Name is Not Changed\n";    
    }
}

else
{
    echo "Salary Updated\n";
}
?>