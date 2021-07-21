<?php
$TAmount  = filter_input(INPUT_POST, 'TAmount');
$Service_NO = filter_input(INPUT_POST, 'Service_NO');


if(!empty($Service_NO ))
{
    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "DBMS_Project";
// Create connection
   
    if(!empty($TAmount) )
    {
        $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
        if (mysqli_connect_error()){
            die('Connect Error ('. mysqli_connect_errno() .') '
            . mysqli_connect_error());
            }
            else{
            $sql = "Update service set Total_Amount = ('$TAmount') where Service_id = ('$Service_NO ')";
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
    echo "Error\n";
}
?>