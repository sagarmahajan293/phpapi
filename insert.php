<?php
error_reporting(0);

$response = array();
 
//if (isset($_GET['unk116']))
//{
 
    $unk116 = $_GET['unk116'];
    $serial14 = $_GET['serial14'];
    $version = $_GET['version'];
    $design_capacity = $_GET['design_capacity'];
    $unk_capacity = $_GET['unk_capacity'];
    $nominal_voltage = $_GET['nominal_voltage'];
    $num_cycles = $_GET['num_cycles'];
    $num_charged = $_GET['num_charged'];
    $max_voltage = $_GET['max_voltage'];
    $max_discharge_current = $_GET['max_discharge_current'];
    $date = $_GET['date'];
    $errors6 = $_GET['errors6'];
    $status = $_GET['status'];
    $capacity_left = $_GET['capacity_left'];
    $percent_left = $_GET['percent_left'];
    $current = $_GET['current'];
    $voltage = $_GET['voltage'];
    $temprature2 = $_GET['temprature2'];
    $unk55 = $_GET['unk55'];
    $health = $_GET['health'];
    $unk64 = $_GET['unk64'];
    $cell_voltages15 = $_GET['cell_voltages15'];
    $unk72 = $_GET['unk72'];
    $unk8 = $_GET['unk8'];
    $uunk930 = $_GET['uunk930'];
    $unk10 = $_GET['unk10'];
    $unk11 = $_GET['unk11'];
    $unk12 = $_GET['unk12'];
    $unk13 = $_GET['unk13'];
    $unk_serial7 = $_GET['unk_serial7'];
    $unk1419 = $_GET['unk1419'];



    $con=mysqli_connect('localhost','root','','trfbat');

    $result = "INSERT INTO `batdatas`(unk116,serial14,version,design_capacity,unk_capacity,nominal_voltage,
    num_cycles, num_charged,max_voltage,max_discharge_current,date,
    errors6,status,capacity_left,percent_left,current,voltage,
    temprature2,unk55,health,unk64,cell_voltages15,unk72,
    unk8,uunk930,unk10,unk11,unk12,unk13,unk_serial7,
    unk1419) VALUES('$unk116','$serial14','$version','$design_capacity','$unk_capacity','$nominal_voltage',
    '$num_cycles', '$num_charged','$max_voltage','$max_discharge_current','$date',
    '$errors6','$status','$capacity_left','$percent_left','$current','$voltage',
    '$temprature2','$unk55','$health','$unk64','$cell_voltages15','$unk72',
    '$unk8','$uunk930','$unk10','$unk11','$unk12','$unk13','$unk_serial7',
    '$unk1419')";
    
    $run=mysqli_query($con,$result);
    


    if ($result) 
    {
        // successfully inserted 
        $response["success"] = 1;
        $response["message"] = "Battery data inserted succesfully successfully created.";
 
        // Show JSON response
        echo json_encode($response);
    }
     else 
     {
        // Failed to insert data in database
        $response["success"] = 0;
        $response["message"] = "Something has been wrong";
 
        // Show JSON response
        echo json_encode($response);
    }

//} 
/*else
{
    
    $response["success"] = 0;
    $response["message"] = "Parameter(s) are missing. Please check the request";
 
    
    echo json_encode($response);
}*/
?>