<?PHP
	$con = mysqli_connect('mysql8.000webhost.com','a5501995_root','nitesh@mishra','a5501995_Pbas');
	if(mysqli_connect_errno($con)){
		echo 'Failed to connect to the database : '.mysqli_connect_error();
		die();
	}

?>
