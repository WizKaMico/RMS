


<?php
	session_start();
	include_once('../../connection/connection.php');
	
    if(isset($_POST['code'])){
		
       
        $code = $_POST['code'];
        date_default_timezone_set('Asia/Manila');
		$date = date('Y-m-d h:i:s'); 
	    
      

		$sql = "UPDATE runner SET end = '$date' WHERE code = '$code'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Member added successfully';
		}
		///////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member added successfully';
		// }
		//////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong while adding';
		}
	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: ../game.php');

?>