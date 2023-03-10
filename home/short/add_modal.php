
<div class="modal fade" id="startrace" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="start.php">
				<div class="row form-group">
					<div class="col-sm-12">
						<center><label class="control-label modal-label">ARE YOU SURE YOU WANT TO START THE RACE ?</label></center>
                        <input type="hidden" value="SHORT RUN (1k)" name="category" required="" readonly=""/>
					</div>
				
				</div>
			
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="add" class="btn btn-primary" style='background-color:#4060ff; border:#4060ff;'><span class="glyphicon glyphicon glyphicon-random"></span> START</a>
			</form>
            </div>

        </div>
    </div>
</div>



<div class="modal fade" id="restartrace" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="restart.php">
				<div class="row form-group">
					<div class="col-sm-12">
						<center><label class="control-label modal-label">ARE YOU SURE YOU WANT TO RESTART THE RACE ?</label></center>
                        <input type="hidden" value="SHORT RUN (1k)" name="category" required="" readonly=""/>
					</div>
				
				</div>
			
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="add" class="btn btn-primary" style='background-color:#4060ff; border:#4060ff;'><span class="glyphicon glyphicon glyphicon-random"></span> RESTART</a>
			</form>
            </div>

        </div>
    </div>
</div>


