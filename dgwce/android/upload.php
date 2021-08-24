<?php 
	
	require_once("opendb.php");

	$meter_no = $_POST['meter_no'];
	// $peak = $_POST['peak'];
	$offpeak = $_POST['offpeak'];
	$year = $_POST['year'];
	$month = $_POST['month'];
	// $offpkimage=$_POST["offpkimage"];
	// $offpkimage1=$_POST["offpkimage"];
   // $realImage=base64_decode($offpkimage);

    // file_put_contents($offpkimage1,$realImage);
	// $r_time = now();

	$sql = "INSERT INTO data_readings(meter_no, offpeak,year,month) VALUES('$meter_no','$offpeak','$year','$month')";

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
