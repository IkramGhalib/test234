<?php 
	
	require_once("opendb.php");

	$meter = $_POST['meter'];
	$peak = $_POST['peak'];
	$offpeak = $_POST['offpeak'];
	//$reader = $_GET['reader'];
	//$r_time = now();

	$sql = "INSERT INTO data_readings(meter, offpeak, peak) VALUES('$meter','$offpeak','$peak')";

	try{
		include "opendb.php";
		$result = $conn -> query($sql) or die(error);
		//$res[]=true;
		echo "Success";
	}catch(exception $e)
	{
		echo $e;
	}

?>