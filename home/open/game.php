<?php
	session_start();
	require 'vendor/autoload.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="datatable/dataTable.bootstrap.min.css">
	
	<style>
		.height10{
			height:10px;
		}
		.mtop10{
			margin-top:10px;
		}
		.modal-label{
			position:relative;
			top:7px
		}
	</style>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<div class="row">
			
			</div>
			<div class="row">
		  <a href="#startrace" data-toggle="modal" class="btn btn-primary" style='background-color:#4060ff; border:#4060ff;'><span class="glyphicon glyphicon-plus"></span> START RACE</a>
			<a href="#restartrace" data-toggle="modal" class="btn btn-primary" style='background-color:#4060ff; border:#4060ff;'><span class="glyphicon glyphicon-plus"></span> RESTART RACE</a>
			</div>
			<div class="height10">
			</div>
			<div class="row">
				<table id="myTable" class="table table-bordered table-striped">
					<thead>
          <th>FULLNAME</th>
						<th>CATEGORY</th>
						<th>CODE</th>
            <th>START</th>
            <th>END</th>
            <th>FINISH TIME</th>
            <th>CERTIFICATE</th>
					</thead>
					<tbody>
						<?php
							include_once('../../connection/connection.php');
							$sql = "SELECT *,registration.code as cod FROM registration LEFT JOIN runner ON registration.code = runner.code  WHERE registration.category = 'OPEN RUN (5k)'";
							$generator = new \Picqer\Barcode\BarcodeGeneratorPNG();
							//use for MySQLi-OOP

							$query = $conn->query($sql);
							while($row = $query->fetch_assoc()){
                $datetime_1 = $row['start']; 
                $datetime_2 = $row['end']; 
                
                $start_datetime = new DateTime($datetime_1); 
                $diff = $start_datetime->diff(new DateTime($datetime_2)); 
								$code = $row['code'];
								echo 
								"<tr>";
									echo"
                                    <td>".$row['fname']." ".$row['lname']."</td>
                                    <td>".$row['category']."</td>
                                    <td>".$row['cod']." </td>
                                    <td>".$row['start']." </td>
                                    <td> ".$row['end']."</td>
                                    <td>
                                    ".$diff->i." Minutes and
                                    ".$diff->s." Seconds
                                   </td>
                                   <td><a href='certificate/index.php?code=".$row['code']."'>CERTIFICATE</a></td>
								</tr>";
							
							}
				
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<?php include('add_modal.php') ?>
<script src="jquery/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="datatable/jquery.dataTables.min.js"></script>
<script src="datatable/dataTable.bootstrap.min.js"></script>

<!-- generate datatable on our table -->
<script>
$(document).ready(function(){
	//inialize datatable
    $('#myTable').DataTable();

    //hide alert
    $(document).on('click', '.close', function(){
    	$('.alert').hide();
    })
});
</script>



<script>


$(document).ready(function(){
    $('#purpose').on('change', function() {
      if ( this.value == 'Sponsored')
      //.....................^.......
      {
        $("#Sponsored").show();
        $("#Race").hide();
      }
      else if(this.value == 'Race'){
        $("#Sponsored").hide();
        $("#Race").show();
      }
      else
      {
        $("#Race").hide();
        $("#Sponsored").hide();
      }
    });
});

</script>


<script>


$(document).ready(function(){
    $('#category').on('change', function() {
      if ( this.value == 'Kiddie')
      //.....................^.......
      {
        $("#Kiddie").show();
        $("#Short").hide();
        $("#Intermediate").hide();
        $("#Open").hide();
      }
      else if(this.value == 'Short'){
        $("#Kiddie").hide();
        $("#Short").show();
        $("#Intermediate").hide();
        $("#Open").hide();
      }
      else if(this.value == 'Intermediate'){
        $("#Kiddie").hide();
        $("#Short").hide();
        $("#Intermediate").show();
        $("#Open").hide();
      }
      
      else
      {
        $("#Kiddie").hide();
        $("#Short").hide();
        $("#Intermediate").hide();
        $("#Open").show();
      }
    });
});

</script>
</body>
</html>