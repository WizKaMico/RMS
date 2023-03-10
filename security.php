<?php 
$user_id  = $_GET['user_id'];
include('connection/connection.php');
$result=mysqli_query($conn, "select * from admin_credentials where user_id='$user_id'");
$row=mysqli_fetch_array($result);
$fullname = $row['email'];
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>PFVF ADMIN | REGISTRATION</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css'>
<link rel="stylesheet" href="style/login/style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<body>
<!-- Animated Wave Background  -->
<div class="ocean">
    <div class="wave"></div>
    <div class="wave"></div>
</div>
<!-- Log In Form Section -->
<section>
    <div class="container" id="container">
     
        <div class="form-container sign-in-container">
            <form action="action/security_validation.php" method="POST">
             <img src="style/logo/PFVF_logo.png">
                <div class="social-container">

                </div>
                <span> HI! <b><?php echo strtoupper($fullname); ?></b></span>
                <label>
                     <input type="hidden" name="user_id" value="<?php echo $user_id; ?>" required="">
                    <input type="hidden" name="email" value="<?php echo $row['email']; ?>" required="">
                    <input type="number" name="code" placeholder="4-DIGIT CODE" style="width:100%;"/>
                </label>

                <button  name="authenticate" style="margin-top: 9px">AUTHENTICATE</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                
                <div class="overlay-panel overlay-right">
                    <h1>PFVF INC.</h1>
                    <p>PUNTA FUEGO VILLAGE FOUNDATION INC.</p>
                </div>
            </div>
        </div>
    </div>
</section>
</body>


<!-- https://Github.com/YasinDehfuli
	 https://Codepen.io/YasinDehfuli
	 -->
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js'></script><script  src="style/login/script.js"></script>

</body>
</html>
