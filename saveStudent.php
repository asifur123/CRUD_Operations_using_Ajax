<?php
session_start();
require 'dbcon.php';

if(isset($_POST['saveStudent']))
{
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
  
    
    $query = "INSERT INTO patientinfo (patient_name, patient_address) VALUES ('$name','$email')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Created Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Error!!! Something Went To Wrong";
        header("Location: create.php");
        exit(0);
    }
}
?>



