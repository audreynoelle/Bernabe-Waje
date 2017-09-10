<div class="container-fluid">
	<div class="row">
		<div class="col-md-12 header">
			<h1> Student Management System </h1>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-12 col-xs-12 col-sm-12  up">
			<h3><b> Add Course </b></h3>
		</div>
	</div>
	
	<div class="row contents">
		
		<div class="col-md-8 col-xs-8 col-sm-8 ">
		<form role="form" class="" method="post"> <br /><br /><br />
		
				<div class="text-danger">
				<?php
				if( isset($errors) ){
					echo '<h6>'.$errors.'</h6>';
				}
				?>
				</div>
			
				
				<div class="form-group">
					<label for="cid"> Course ID: </label>
					<input type="text" class="form-control" id="cid" name="cid" />
				</div>
				
				<div class="form-group">
					<label for="cname"> Course Name: </label>
					<input type="text" class="form-control" id="cname" name="cname" />
				</div>
				
				<div class="form-group">
					<label for="cdesc"> Course Description: </label>
					<input type="text" class="form-control" id="cdesc" name="cdesc" />
				</div> <br />
				
				<div class="form-group">
					<button type="submit" class="btn btn-primary">
						Save <span class="glyphicon glyphicon-save"></span> 
					</button>
					<a href="viewcourses" class="btn btn-danger btn-md">Cancel</a>
		
				</div>
		</form>
		</div>
		
		
	</div>
	

	<div class="row">
		<div class="col-md-12 text-center footer">
			Copyright &copy; 2017. Bootstrap by BW
		</div>
	</div>
</div>


