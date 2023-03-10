<?php 

$server = "localhost"; 
$database = "turtle_new_db"; 
$username = "root"; 
$password = ""; 

$conn = new mysqli($server, $username, $password, $database); 
if($conn){
    
}else{
    echo "CONNECTION LOST";
}

?>