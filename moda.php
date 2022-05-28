<!DOCTYPE html>
<html lang="en">


<?php

	$name = $_POST['name'];
	$email = $_POST['email'];
	
	
	$place =  $_POST['place'];
  $package =  $_POST['package'];
  $date =  $_POST['date'];
    

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
			$sql = "INSERT INTO confirm(name , email ,place,package,date)
			values ('$name' , '$email','$place','$package','$date')" ;
			if($conn->query($sql)) {
				echo "Save Data" ;
			} else {
				echo "Error: ".$sql ."<br>".$conn->error;
			}
			$conn->close() ;
		}

	}

?>

<body>
	
	

</body>

</html>