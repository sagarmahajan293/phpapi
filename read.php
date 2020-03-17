<?php


$response = array();
 
$con=mysqli_connect('localhost','root','','trfbat');
$result ="SELECT *FROM batdatas";
$res = mysqli_query($con, $result);

if (mysqli_num_rows($res) > 0)
{
    
	 $response["batdatas"] = array();
 
	 while ($row = mysqli_fetch_array($res)) {
         $batdatas = array();
        $batdatas["id"] = $row["id"];
        $batdatas["unk116"] = $row["unk116"];
		$batdatas["serial14"] = $row["serial14"];
        $batdatas["version"] = $row["version"];
        $batdatas["design_capacity"] = $row["design_capacity"];
		$batdatas["unk_capacity"] = $row["unk_capacity"];
        $batdatas["nominal_voltage"] = $row["nominal_voltage"];
        $batdatas["num_cycles"] = $row["num_cycles"];
		$batdatas["num_charged"] = $row["num_charged"];
        $batdatas["max_voltage"] = $row["max_voltage"];
        $batdatas["max_discharge_current"] = $row["max_discharge_current"];
		$batdatas["max_charge_current"] = $row["max_charge_current"];
        $batdatas["date"] = $row["date"];
        $batdatas["errors6 "] = $row["errors6"];
		$batdatas["status"] = $row["status"];
        $batdatas["capacity_left"] = $row["capacity_left"];
        $batdatas["percent_left"] = $row["percent_left"];
		$batdatas["current"] = $row["current"];
        $batdatas["voltage"] = $row["voltage"];
        $batdatas["temprature2"] = $row["temprature2"];
		$batdatas["unk55"] = $row["unk55"];
        $batdatas["health"] = $row["health"];
        $batdatas["unk64"] = $row["unk64"];
		$batdatas["cell_voltages15"] = $row["cell_voltages15"];
        $batdatas["unk72"] = $row["unk72"];
        $batdatas["unk8"] = $row["unk8"];
        $batdatas["uunk930"] = $row["uunk930"];
		$batdatas["unk10"] = $row["unk10"];
        $batdatas["unk11"] = $row["unk11"];
        $batdatas["unk12"] = $row["unk12"];
		$batdatas["unk13"] = $row["unk13"];
        $batdatas["unk_serial7"] = $row["unk_serial7"];
        $batdatas["unk1419"] = $row["unk1419"];
		

		 array_push($response["batdatas"], $batdatas);
    }
    $response["success"] = 1;
 
     echo json_encode($response);
}	
else 
{
    $response["success"] = 0;
    $response["message"] = "No data on weather found";
 
    echo json_encode($response);
}
?>