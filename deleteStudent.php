<?php
require 'dbcon.php';

if(isset($_POST['delete']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['delete']);

    $query = "DELETE FROM patientinfo WHERE patient_id='$student_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Patients Data has been deleted Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Error!!! Something Went To Wrong";
        header("Location: index.php");
        exit(0);
    }
}
?>



