<?php

echo '<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Edit User Profile</h4>
      </div>
      <div class="modal-body">
		<div class="container">
			<img src="imgs/1.jpg" height="80" width="80" alt="..." class="img-thumbnail">
		</div>
		<!-- img section -->

		<!-- information section -->
		<div>
			<table class="infoTable table">
				<tr>
					<td><span><b>ID</b></span></td><td><span class="label label-info">1</span></td>
				</tr>
				<tr>
					<td><span><b>Full Name</b></span></td><td>Bomj</td>
				</tr>
				<tr>
					<td><span><b>Job Title</b></span></td><td>BoxWidth</td>
				</tr>
				<tr>
					<td><span><b>Email Adress</b></span></td><td>coffemanyaki@code.edu.az</td>
				</tr>
				<tr>
					<td><span><b>Password</b></span></td><td>[hidden]</td>
				</tr>
				<tr>
					<td><span><b>Telephone</b></span></td><td>106</td>
				</tr>
				<tr>
					<td><span><b>Receive Project Notifications</b></span></td><td>Error 404 not found</td>
				</tr>
				<tr>
					<td><span><b>Group</b></span></td><td>Q03</td>
				</tr>
			</table>
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>';

?>