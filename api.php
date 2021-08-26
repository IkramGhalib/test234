<?php
// $readingId=$_POST['readingId'];
include('opendb.php');
$meter=$_POST['meter121212'];
$peak=$_POST['peak'];
$offpeak=$_POST['offpeak'];
$sql="INSERT INTO data_reading(meter,peak,offpeak) Values('$meter','$peak','$offpeak')";
$result=$conn->query($sql);
if($result){
	echo json_decode(array());
}
else{
	echo json_decode(array());
}
?>