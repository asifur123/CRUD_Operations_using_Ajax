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
    <h1> PHP Ajax CRUD </h1>

    <title>Patient Details</title>
</head>

<body>

    <div class="container mt-4">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Patient Details
                            <a href="create.php" class="btn btn-primary float-end">Add Patients</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">

                            <!-- <input type="text" id="patient_name" name="patient_name">
                            <button type="button" name="search">search</button> -->
                        </form>

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Patient Name</th>
                                    <th>Patient Address</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = "SELECT * FROM patientinfo";
                                $query_run = mysqli_query($con, $query);

                                if (mysqli_num_rows($query_run) > 0) {
                                    foreach ($query_run as $student) {
                                ?>

                                        <tr>
                                            <td><?= $student['patient_id']; ?></td>
                                            <td><?= $student['patient_name']; ?></td>
                                            <td><?= $student['patient_address']; ?></td>

                                            <td>
                                                <a href="view.php?id=<?= $student['patient_id']; ?>" class="btn btn-info btn-sm">View</a>
                                                <a href="edit.php?patient_id=<?= $student['patient_id']; ?>" class="btn btn-success btn-sm">Edit</a>

                                                <form action="deleteStudent.php" method="POST" class="d-inline">
                                                    <button type="submit" id='button_delete' name="delete" value="<?= $student['patient_id']; ?>" class="btn btn-danger btn-sm">Delete</button>

                                                </form>
                                            </td>
                                        </tr>
                                <?php
                                    }
                                } else {
                                    echo "<h5> No Record Found </h5>";
                                }
                                ?>

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
                      
    <script>

async function createStudent() {
    // Get the student data from the form
    const name = document.getElementById('patient_name').value;
    const email = document.getElementById('patient_address').value;
    const id = document.getElementById('button_delete').value;

    // Save the student using AJAX
    $.ajax({
        type: 'post',
        data: {
            patient_name: name,
            patient_address: email
        },
        url: "saveStudent.php",
        success: function (data) {
            var response = JSON.parse(data);
            alert(response.message);
        }
    });

    // Update the student using AJAX
    $.ajax({
        type: 'post',
        data: {
    
            patient_id: patient_id,
            patient_name: name,
            patient_address: email
        },
        url: "updateStudent.php",
        success: function (data) {
            var response = JSON.parse(data);
            alert(response.message);
        }
    });

    // Delete the student using AJAX
    $.ajax({
        type: 'get',
        data: { delete: patient_id },
        url: "deleteStudent.php",
        success: function (data) {
            var response = JSON.parse(data);
            alert(response.message);
        }
    });
}

        
        
    </script>

</body>

</html>