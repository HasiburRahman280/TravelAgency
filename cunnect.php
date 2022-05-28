<!DOCTYPE html>
<html lang="en">


<?php

	$name = $_POST['name'];
	$email = $_POST['email'];
	
	$address = $_POST['address'];
	
	$biodata =  $_POST['biodata'];
    $place =  $_POST['place'];

	if(empty($name) || empty($email) || empty($place)) {
		echo "Empty field found !! All Field have to be filled !!" ;
		die() ;
	} else {
		$host = "localhost" ;
		$dbusername = "root" ;
		$dbpassword = "" ;
		$dbname = "travel" ;

		$conn = new mysqli ($host,$dbusername,$dbpassword,$dbname) ;
		
		if(mysqli_connect_error()) {
			die('Connect Error ('. mysql_connect_errno() .') '
			. mysqli_connect_error());	
		} else {
			$sql = "INSERT INTO information(name , email ,address, biodata ,place)
			values ('$name' , '$email','$address','$biodata','$place')" ;
			if($conn->query($sql)) {
				echo "Updated Successfully." ;
			} else {
				echo "Error: ".$sql ."<br>".$conn->error;
			}
			$conn->close() ;
		}

	}

?>

<body>
	
	<nav>
		<a href="indax.html" target="_blank">
            <button>Home</button>
		</a>
		<meta http-equiv="refresh" content="30">
	</nav>

</body>

</html>