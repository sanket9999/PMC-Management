<?php

$db = mysqli_connect("localhost","root","","dbms_project");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>