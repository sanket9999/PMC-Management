<?php
$Project_No  = filter_input(INPUT_POST, 'Project_No');
$Budget = filter_input(INPUT_POST, 'Budget');
$Start_Date = filter_input(INPUT_POST, 'Start_Date');
$End_Date = filter_input(INPUT_POST, 'End_Date');

if(!empty($Project_No ))
{
    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "DBMS_Project";
// Create connection
   
    if(!empty($Budget) )
    {
        $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
        if (mysqli_connect_error()){
            die('Connect Error ('. mysqli_connect_errno() .') '
            . mysqli_connect_error());
            }
            else{
            $sql = "Update project set Budget = ('$Budget') where Project_No = ('$Project_No')";
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

    if(!empty($End_Date))
    {
        $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
        if (mysqli_connect_error()){
            die('Connect Error ('. mysqli_connect_errno() .') '
            . mysqli_connect_error());
            }
            else{
                $sql = "Update project set End_Date  = ('$End_Date') where Project_No = ('$Project_No')";
            if ($conn->query($sql)){
            echo "\n";
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
        echo "Record Updated\n";    
    }

    if(!empty($Start_Date))
    {
        $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
        if (mysqli_connect_error()){
            die('Connect Error ('. mysqli_connect_errno() .') '
            . mysqli_connect_error());
            }
            else{
                $sql = "Update project set Start_Date  = ('$Start_Date') where Project_No = ('$Project_No')";
            if ($conn->query($sql)){
            echo "\n";
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
        echo "Start Date not Changed\n";    
    }
}
else
{
    echo "Error\n";
}
?>