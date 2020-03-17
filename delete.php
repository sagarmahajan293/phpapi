<?php
 


$response = array();

$con=mysqli_connect('localhost','root','','trfbat');
   

if (isset($_GET['id'])) 
{
    $id = $_GET['id'];
    $result = "DELETE FROM `batdatas` WHERE id = $id";
    $run=mysqli_query($con,$result);
   
    echo "Data successfully deleted";
    $response["success"] = 1;
    $response["message"] = "Data successfully deleted";
 
        
} 
else 
{
    
    $response["success"] = 0;
    $response["message"] = "Parameter(s) are missing. Please check the request";
 
    echo json_encode($response);
}
?>