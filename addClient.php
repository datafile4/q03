<?php

echo '<div class="modal fade" id="addClient" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Adding new client</h4>
      </div>
      <div class="modal-body">
			<div class="panel">
			 	<div class="panel-body">
					<div class="well well-sm">
						<h5><b>Company Details</b></h5>
					</div>

					<div class="input-group col-md-12">
						<h5>Company Name</h5>
						<input type="text" class="form-control" aria-describedby="sizing-addon2">
					</div>

					<div class="input-group col-md-12">
						<h5>Address</h5>
						<input type="text" class="form-control" aria-describedby="sizing-addon2">
					</div>

					<div class="input-group col-md-12">
						<h5>City</h5>
						<input type="text" class="form-control" aria-describedby="sizing-addon2">
					</div>

					<div class="input-group col-md-12">
						<h5>Zip/Post Code</h5>
						<input type="text" class="form-control" aria-describedby="sizing-addon2">
					</div>

					<div class="input-group col-md-12">
						<h5>Country</h5>
						<input type="text" class="form-control" aria-describedby="sizing-addon2">
					</div>

					<div class="input-group col-md-12">
						<h5>Website</h5>
						<input type="url" class="form-control" aria-describedby="sizing-addon2">
					</div>
				</div>
			</div>

			<div class="panel">
		 		<div class="panel-body">
					<div class="well well-sm">
						<h5><b>Main Contact</b></h5>
					</div>

					<div class="input-group col-md-12">
						<h5>Full Name</h5>
						<input type="text" class="form-control" aria-describedby="sizing-addon2">
					</div>

					<div class="input-group col-md-12">
						<h5>Job Title</h5>
						<input type="text" class="form-control" aria-describedby="sizing-addon2">
					</div>

					<div class="input-group col-md-12">
						<h5>Telephone</h5>
						<input type="text" class="form-control" aria-describedby="sizing-addon2">
					</div>

					<div class="input-group col-md-12">
						<h5>Email</h5>
						<input type="text" class="form-control" aria-describedby="sizing-addon2">
					</div>

					<div class="input-group col-md-12">
						<h5>Password</h5>
						<input type="text" class="form-control" aria-describedby="sizing-addon2">
					</div>

					<div class="input-group col-md-12">
						<h5>Password again</h5>
						<input type="url" class="form-control" aria-describedby="sizing-addon2">
					</div>
				</div>
			</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Abort</button>
         <button type="button" class="btn btn-success" data-dismiss="modal">Add Client</button>
      </div>

    </div>
  </div>
</div>';

?>
