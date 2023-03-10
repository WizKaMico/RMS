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
        <div class="form-container sign-up-container">
            <form action="action/recover.php" method="POST">
            <img src="style/logo/PFVF_logo.png">
                <div class="social-container">
                 
                </div>
                <span>Or use your Email for registration</span>
                
                <label>
                    <input type="email" placeholder="Email"/>
                </label>
              
                <button style="margin-top: 9px">RECOVER ACCOUNT</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="action/login.php" method="POST">
             <img src="style/logo/PFVF_logo.png">
                <div class="social-container">

                </div>
                <span> Or sign in using E-Mail Address</span>
                <label>
                    <input type="email" placeholder="Email" name="email" style="width:100%;"/>
                </label>
                <label>
                    <input type="password" placeholder="Password" name="password" style="width:100%;"/>
                </label>
                <a href="#" id="signUp">Forgot your password?</a>
                <button style="margin-top: 9px" name="login">Sign In</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>PFVF INC.</h1>
                    <p>PUNTA FUEGO VILLAGE FOUNDATION INC.</p>
                    <button class="ghost mt-5" id="signIn">Sign In</button>
                </div>
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
