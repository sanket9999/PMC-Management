<?php
$Aadhar_number  = filter_input(INPUT_POST, 'Aadhaar_number');
$Full_name = filter_input(INPUT_POST, 'fname');
$Phone_number = filter_input(INPUT_POST, 'Phone_number');
$Birth_date = filter_input(INPUT_POST, 'Birth_date');

if(!empty($Aadhar_number))
{
    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "DBMS_Project";
// Create connection
   
    if(!empty($Full_name) )
    {
        $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
        if (mysqli_connect_error()){
            die('Connect Error ('. mysqli_connect_errno() .') '
            . mysqli_connect_error());
            }
            else{
            $sql = "Update citizens set Full_name  = ('$Full_name') where Aadhar_number = ('$Aadhar_number')";
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

    if(!empty($Phone_number))
    {
        $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
        if (mysqli_connect_error()){
            die('Connect Error ('. mysqli_connect_errno() .') '
            . mysqli_connect_error());
            }
            else{
            $sql = "Update citizens set Phone_number  = ('$Phone_number') where Aadhar_number = ('$Aadhar_number')";
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
        echo "Full Name is Not Changed\n";    
    }

    if(!empty($Birth_date))
    {
        $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
        if (mysqli_connect_error()){
            die('Connect Error ('. mysqli_connect_errno() .') '
            . mysqli_connect_error());
            }
            else{
            $sql = "Update citizens set Birth_date  = ('$Birth_date') where Aadhar_number = ('$Aadhar_number')";
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
        echo "Birth Date is Not Changed\n";    
    }
}
else
{
    echo "Aadhar Number Enter Karo\n";
}
?>