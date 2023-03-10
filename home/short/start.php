<?php
	session_start();
    include_once('../../connection/connection.php');

	if(isset($_POST['add'])){
		$category = $_POST['category'];

		
			$sql = "SELECT * FROM registration WHERE category = '$category'";
			$query = $conn->query($sql);
			while($row = $query->fetch_assoc()){
			$code = $row['code'];   
			date_default_timezone_set('Asia/Manila');
		    $start = date('Y-m-d h:i:s'); 
			mysqli_query($conn,"INSERT INTO runner (code,start) VALUES ('$code','$start')");
			}
		


	header('location: game.php');
	}
?>