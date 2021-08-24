    <?php
    $servername = "localhost";
	$username = "root";
	$password = "";
	// $dbname = "student";
	$dbname = "metrocure_dgwce";

	try {
	    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	    // set the PDO error mode to exception
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		//echo "Connection Successfull";
	}
	catch(PDOException $e)
	    {
	    echo  $e->getMessage();
	    echo "Unsuccesfull! Try again...!";
	    }

?>
