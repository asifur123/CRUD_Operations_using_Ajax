<?php
require 'dbcon.php';

if(isset($_POST['update_student']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['patient_id']);

    $name = mysqli_real_escape_string($con, $_POST['patient_name']);
    $email = mysqli_real_escape_string($con, $_POST['patient_address']);
 

    $query = "UPDATE patientinfo SET patient_name='$name', patient_address='$email' WHERE patient_id='$student_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        // $_SESSION['message'] = "Updated Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        // $_SESSION['message'] = "Error!!! Something Went To Wrong";
        header("Location: index.php");
        exit(0);
    }

}
?>


