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
			<?php
				if(isset($_SESSION['error'])){
					echo
					"
					<div class='alert alert-danger text-center'>
						<button class='close'>&times;</button>
						".$_SESSION['error']."
					</div>
					";
					unset($_SESSION['error']);
				}
				if(isset($_SESSION['success'])){
					echo
					"
					<div class='alert alert-success text-center'>
						<button class='close'>&times;</button>
						".$_SESSION['success']."
					</div>
					";
					unset($_SESSION['success']);
				}
			?>
			</div>
			
			<div class="height10">
			</div>
			<div class="row">
				<table id="myTable" class="table table-bordered table-striped">
					<thead>
						<th>FULLNAME</th>
						<th>CATEGORY</th>
						<th>QR</th>
						<th>ACTION</th>
					</thead>
					<tbody>
						<?php
							include_once('../../connection/connection.php');
							$sql = "SELECT * FROM registration WHERE category = 'SHORT RUN (1k)'";
							$generator = new \Picqer\Barcode\BarcodeGeneratorPNG();
							//use for MySQLi-OOP

							$query = $conn->query($sql);
							while($row = $query->fetch_assoc()){
								$code = $row['code'];
								echo 
								"<tr>";
								  if(!empty($row['fname']) || !empty($row['lname'])){
									echo "<td>".$row['fname']." ".$row['lname']."</td>";
									echo "<td>".$row['category']."</td>"; 
								  }else{
									echo "<td>PRE-SELL</td>";
									echo "<td>PRE-SELL</td>";
								  }
									
								  echo "<td><center><img src='https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=".$row['code']."&choe=UTF-8' style='width:30%;'></center></td>";
								
									// echo '<img src="data:image/png;base64,' . base64_encode($generator->getBarcode($code, $generator::TYPE_CODE_128)) . '" style="width:50%;"></td>';
									echo"<td>
										<a href='#edit_".$row['id']."' style='background-color:#4060ff; border:#4060ff;' class='btn btn-success btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span></a>
										<a href='print_pdf.php?id=".$row['id']."' style='background-color:#4060ff; border:#4060ff;' class='btn btn-success btn-sm'><span class='glyphicon glyphicon-print'></span></a>	
										</td>
								</tr>";
								include('edit_delete_modal.php');
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



<script  src="../js/script.js"></script>
<script  src="../js/shirt.js"></script>
<script src="../js/tabs.js"></script>
</body>
</html>