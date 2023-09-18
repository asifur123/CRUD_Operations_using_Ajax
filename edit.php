<?php
session_start();
require 'dbcon.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Edit Patient</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit A Patient Details
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['patient_id']))
                        {
                            $student_id = mysqli_real_escape_string($con, $_GET['patient_id']);
                            $query = "SELECT * FROM patientinfo WHERE patient_id='$student_id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $student = mysqli_fetch_array($query_run);
                                ?>
                                <form action="updateStudent.php" method="POST">
                                    <input type="hidden" name="patient_id" value="<?= $student['patient_id']; ?>">

                                    <div class="mb-3">
                                        <label>Patient Name</label>
                                        <input type="text" name="patient_name" value="<?=$student['patient_name'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Patient Address</label>
                                        <input type="text" name="patient_address" value="<?=$student['patient_address'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" id= "update_std" name="update_student" class="btn btn-primary">
                                            Update Patient Info
                                        </button>
                                    </div>

                                </form>
                                <?php
                            }
                            else
                            {
                                echo "<h4>No Id Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>