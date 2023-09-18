<?php
// session_start();
// require 'dbcon.php';

// if(isset($_POST['delete']))
// {
//     $student_id = mysqli_real_escape_string($con, $_POST['delete']);

//     $query = "DELETE FROM patientinfo WHERE patient_id='$student_id' ";
//     $query_run = mysqli_query($con, $query);

//     if($query_run)
//     {
//         $_SESSION['message'] = "Patients Data has been deleted Successfully";
//         header("Location: index.php");
//         exit(0);
//     }
//     else
//     {
//         $_SESSION['message'] = "Error!!! Something Went To Wrong";
//         header("Location: index.php");
//         exit(0);
//     }
// }

// // if(isset($_POST['search']))
// // {
// //     $student_id = mysqli_real_escape_string($con, $_POST['patient_name']);

// //     $query = "SELCT * FROM patientinfo WHERE patient_name='$student_id' ";
// //     $query_run = mysqli_query($con, $query);
// //     var_dump($query_run)
// // ////
// // }

// if(isset($_POST['update_student']))
// {
//     $student_id = mysqli_real_escape_string($con, $_POST['patient_id']);

//     $name = mysqli_real_escape_string($con, $_POST['patient_name']);
//     $email = mysqli_real_escape_string($con, $_POST['patient_address']);
 

//     $query = "UPDATE patientinfo SET patient_name='$name', patient_address='$email' WHERE patient_id='$student_id' ";
//     $query_run = mysqli_query($con, $query);

//     if($query_run)
//     {
//         $_SESSION['message'] = "Updated Successfully";
//         header("Location: index.php");
//         exit(0);
//     }
//     else
//     {
//         $_SESSION['message'] = "Error!!! Something Went To Wrong";
//         header("Location: index.php");
//         exit(0);
//     }

// }


// if(isset($_POST['save_patient']))
// {
//     $name = mysqli_real_escape_string($con, $_POST['name']);
//     $email = mysqli_real_escape_string($con, $_POST['email']);
  

//     $query = "INSERT INTO patientinfo (patient_name, patient_address) VALUES ('$name','$email')";

//     $query_run = mysqli_query($con, $query);
//     if($query_run)
//     { 
//         $_SESSION['message'] = "Created Successfully";
//         header("Location: index.php");
//         exit(0);
//     }
//     else
//     {
//         $_SESSION['message'] = "Error!!! Something Went To Wrong";
//         header("Location: create.php");
//         exit(0);
//     }
// }

?>