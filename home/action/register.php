<?php
	session_start();
	include_once('../../connection/connection.php');
	
    if(isset($_POST['submit'])){
		
       
        $code = rand(6666666,9999999);
        $fname = $_POST['fname']; 
        $mname = $_POST['mname']; 
        $lname = $_POST['lname'];
        $address = $_POST['address'];
        $dob =  $_POST['dob'];
        $contact =  $_POST['contact'];
        $email =  $_POST['email'];
        $category =  $_POST['category'];
        $type =  $_POST['type'];
        $shirt =  $_POST['shirt'];
        $size =  $_POST['size'];
        $status =  'VALID';
      

		$sql = "INSERT INTO registration (code, fname, mname, lname, address, dob, contact, email, category, type, shirt, size,  status) VALUES ('$code', '$fname', '$mname', '$lname', '$address', '$dob', '$contact', '$email', '$category', '$type', '$shirt', '$size', '$status')";

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

	header('location: ../index.php');

?>