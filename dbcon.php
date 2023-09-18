<?php


$con = mysqli_connect("localhost","root","","hospital");

$query = "SELECT * FROM patientinfo";
$query_run = mysqli_query($con, $query);

// $result_array = [];
// if(mysqli_num_rows($query_run)>0)
// {

//     foreach($query_run as $row)
//     {

//         array_push($result_array, $row);
//     }
    
//     echo json_encode($result_array);
// }
//     else
//     {
//         echo $return = "<h4> No record </h4>";   
//     }
    

?>