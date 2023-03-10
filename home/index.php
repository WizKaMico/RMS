<?php 

 include('../connection/session.php'); 
 include('../connection/connection.php');
  
 $result=mysqli_query($conn, "select * from admin_credentials where user_id='$session_id'")or die('Error In Session');
 $row=mysqli_fetch_array($result);

 $result=mysqli_query($conn, "select * from admin_credentials where user_id='$session_id'")or die('Error In Session');
 $row=mysqli_fetch_array($result);
 

 $kid=mysqli_query($conn, "select *,count(id) as total from registration where category='KIDDIE RUN (400m)'");
 $krow=mysqli_fetch_array($kid);

 $short=mysqli_query($conn, "select *,count(id) as total from registration where category='SHORT RUN (1k)'");
 $srow=mysqli_fetch_array($short);

 $irun=mysqli_query($conn, "select *,count(id) as total from registration where category='INTERMEDIATE RUN (3k)'");
 $irow=mysqli_fetch_array($irun);

 $open=mysqli_query($conn, "select *,count(id) as total from registration where category='OPEN RUN (5k)'");
 $orow=mysqli_fetch_array($open);


 

?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>PFVF ADMIN | REGISTRATION</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="blue" data-image="assets/img/sidebar-5.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="#" class="simple-text">
                    PFVFI | RMS
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="index.php">
                        <i class="pe-7s-note2"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="game.php">
                        <i class="pe-7s-user"></i>
                        <p>EVENT</p>
                    </a>
                </li>
                
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">WELCOME! <?php strtoupper($row['email']); ?></a>
                </div>
                <div class="collapse navbar-collapse">
                   
                    

                    <ul class="nav navbar-nav navbar-right">
                
                        <li>
                            <a href="#">
                                <p>Log out</p>
                            </a>
                        </li>
						<li class="separator hidden-lg"></li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
            <div class="row">
            <div class="col-md-3">
                        <div class="card">
                       

                            <div class="header">
                                <h4 class="title"><?php echo $krow['total']; ?></h4>
                                <p class="category"> <i class="fa fa-circle" style="color:yellow;"></i>KIDDIE RUN</p>
                            </div>
                          <div class="content">
                             
                         </div>
                    </div>
                </div>
                <div class="col-md-3">
                        <div class="card">

                            <div class="header">
                                <h4 class="title"><?php echo $srow['total']; ?></h4>
                                <p class="category"><i class="fa fa-circle" style="color:red;"></i>SHORT RUN</p>
                            </div>
                          <div class="content">
                             
                         </div>
                    </div>
                </div>
                <div class="col-md-3">
                        <div class="card">

                            <div class="header">
                                <h4 class="title"><?php echo $irow['total']; ?></h4>
                                <p class="category"><i class="fa fa-circle" style="color:green;"></i>INTERMEDIATE RUN</p>
                            </div>
                          <div class="content">
                             
                         </div>
                    </div>
                </div>
                <div class="col-md-3">
                        <div class="card">

                            <div class="header">
                                <h4 class="title"><?php echo $orow['total']; ?></h4>
                                <p class="category"><i class="fa fa-circle text-info"></i>OPEN RUN</p>
                            </div>
                          <div class="content">
                             
                         </div>
                    </div>
                </div>
            </div>
        
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">

                            <div class="header">
                                <h4 class="title">LIST OF PARTICIPANTS</h4>
                                <!-- <p class="category">Last Campaign Performance</p> -->
                            </div>
                            <div class="content">
                                
                            <div class="tabs-wrapper">
                            <ul class="nav-tabs">
                                <li class="nav-item tab is-active" data-role="tab" data-target="#tabs-home3">PRESELL
                                </li>

                                <li class="nav-item tab" data-role="tab" data-target="#tabs-profile3">KIDDIE RUN
                                </li>


                                <li class="nav-item tab" data-role="tab" data-target="#tabs-profile4">SHORT RUN
                                </li>

                                <li class="nav-item tab" data-role="tab" data-target="#tabs-messages3">INTERMEDIATE RUN
                                </li>

                                <li class="nav-item tab" data-role="tab" data-target="#tabs-messages4">OPEN RUN
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-panel is-active" id="tabs-home3">
                                
                                <form action="../action/bulk_add.php" method="POST">
                                    
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>HOW MANY</label>
                                                <input type="number" class="form-control" name="many" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>CATEOORY</label>
                                                <select id="pre_country" name="category" class="form-control"></select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                 <label>TYPE</label>
                                                 <select name="type" id="pre_state" class="form-control"></select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                            <label>SUBMIT</label>
                                            <button  class="form-control" name="submit">PRESELL</button>
                                            </div>
                                        </div>
                                    </div>
                                   </form>
                                
                                </div>

                                <div class="tab-panel" id="tabs-profile3">
                                <iframe src="kid/" style="border:none; width:100%; height:500px;"></iframe>
                                
                                </div>
                                <div class="tab-panel" id="tabs-profile4">
                                <iframe src="short/" style="border:none; width:100%; height:500px;"></iframe>
                               
                                </div>
                                <div class="tab-panel" id="tabs-messages3">
                                <iframe src="intermediate/" style="border:none; width:100%; height:500px;"></iframe>
                              
                                </div>
                                <div class="tab-panel" id="tabs-messages4">
                                <iframe src="open/" style="border:none; width:100%; height:500px;"></iframe>
                               
                                </div>
                            </div>

                            </div>

                                <div class="footer">
                                    <div class="legend">
                                        <i class="fa fa-circle" style="color:yellow;"></i> Kiddie Run
                                        <i class="fa fa-circle" style="color:red;"></i> Short Run
                                        <i class="fa fa-circle" style="color:green;"></i> Intermediate Run
                                        <i class="fa fa-circle text-info"></i> Open Run
                                    </div>
                                    <hr>
                                    <div class="stats">
                                        <!-- <i class="fa fa-clock-o"></i> Campaign sent 2 days ago -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">REGISTER A PARTICIPANT</h4>
                                <!-- <p class="category">24 Hours performance</p> -->
                            </div>
                            <div class="content">
                                <form action="action/register.php" method="POST">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Firstname</label>
                                                <input type="text" class="form-control" name="fname" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Middlename</label>
                                                <input type="text" class="form-control" name="mname" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                 <label>Lastname</label>
                                                <input type="text" class="form-control" name="lname" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                 <label>Address</label>
                                                <input type="text" class="form-control" name="address" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                 <label>Birthdate</label>
                                                <input type="date" class="form-control" name="dob" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                 <label>Contact</label>
                                                <input type="number" class="form-control" name="contact" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                 <label>Email</label>
                                                <input type="text" class="form-control" name="email" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                 <label>Category</label>
                                                 <select id="country" name="category" class="form-control"></select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                 <label>Type</label>
                                                 <select name="type" id="state" class="form-control"></select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                 <label>Shirt Type</label>
                                                 <select id="inputState" name="shirt" class="form-control">
                                                 <option value="SelectState">Select Size</option>
                                                 <option value="Kids">Kids</option>
                                                 <option value="Adults">Adult</option>
                                                 </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                 <label>Size</label>
                                                 <select name="size" id="inputDistrict" class="form-control">
                                                 <option value="">-- Select Size -- </option>
                                                 </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button  class="form-control" name="submit">REGISTER</button>
                                        </div>
                                    </div>
                               </form>
                                <div class="footer">
                                    <div class="legend">
                                    <i class="fa fa-circle" style="color:yellow;"></i> Kiddie Run
                                        <i class="fa fa-circle" style="color:red;"></i> Short Run
                                        <i class="fa fa-circle" style="color:green;"></i> Intermediate Run
                                        <i class="fa fa-circle text-info"></i> Open Run
                                    </div>
                                    <hr>
                                    <div class="stats">
                                        <!-- <i class="fa fa-history"></i> Updated 3 minutes ago -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    
                </nav>
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="#">DEVCORE I.T SOLUTIONS INC.</a>
                </p>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'pe-7s-gift',
            	message: "Welcome to <b>Light Bootstrap Dashboard</b> - a beautiful freebie for every web developer."

            },{
                type: 'info',
                timer: 4000
            });

    	});
	</script>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js'></script>
<script  src="js/pre.js"></script>
<script  src="js/script.js"></script>
<script  src="js/shirt.js"></script>
<script src="js/tabs.js"></script>

</html>

<style>


.tabs-wrapper {
  box-shadow: 2px 1px 20px #ddd;
  padding: 1rem;
  border-radius: 0.5rem;
  height:600px;
  max-width: 100%;
}

ul {
  list-style-type: none;
  padding-left: 0;
}

.nav-tabs {
  display: flex;
}
.nav-tabs li {
  border: 1px solid #ddd;
}

.tab {
  padding: 0.5rem 1.5rem;
  cursor: pointer;
  border-radius: 4px;
  margin-right: 0.5rem;
  transition: all 0.3s ease 0s;
}

.tab.is-active {
  background: #4060ff;
  color: #fff;
}

.tab-panel {
  display: none;
}
.tab-panel p {
  line-height: 1.6;
}
.tab-panel.is-active {
  display: block;
}

</style>