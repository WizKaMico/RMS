<?php
	session_start();
    include('../connection/connection.php');

	if(isset($_POST['submit'])){
    
        $many = $_POST['many'];
        $type = $_POST['type'];
		$category = $_POST['category'];
        $code = rand(6666666,9999999);
    

        for($num = 0; $num < $many; $num++){
            mysqli_query($conn,"INSERT INTO registration (code,category,type) VALUES ('$code','$category','$type')");
        }

		
	
		


	header('location: ../home/index.php');
	}
?>