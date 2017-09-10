<div class="container-fluid">
	<div class="row">
		<div class="col-md-12 header">
			<h1> Student Management System </h1>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-4 col-xs-4 col-sm-4 up">
			<h3><b> Menu </b></h3>
		</div>
		
		<div class="col-md-8 ">
			<h3><b> Welcome to SMS! </b></h3>
		</div>
	</div>
	
	<div class="row">
		<div class="col-sm-4 dash" >
			<h3><a href=""> Students </a></h3>
		</div>
		
		<div class="col-sm-4 " >
			<h3>Students </h3>
		</div>
		
		<div class="col-sm-4 " >
			<h3>Courses </h3>
		</div>
		
		
	</div>
	
	<div class="row">
		<div class="col-sm-4 contents dash" >
			<h3><a href="boots/viewcourses"> Courses </a></h3>
		</div>
		
		<div class="col-sm-4 contents">
			
			<table class="table table-striped table-hover table-condensed table-responsive">
				
				<tbody>
				<?php
				foreach($students as $s){
					echo '	<tr>	
								<td>'.$s['lastname'].'</td>
								<td>'.$s['firstname'].'</td>
								<td>'.$s['middlename'].'</td>
							</tr>
							';
				}
				?>
				</tbody>
			</table>
			
		</div>
		
		<div class="col-sm-4 contents">
			<table class="table table-striped table-hover table-condensed table-responsive">
				
				<tbody>
				<?php
				foreach($courses as $s){
					echo '	<tr>
								<td>'.$s['cname'].'</td>
							</tr>
							';
				}
				?>
				</tbody>
			</table>			
		</div>
		
	</div>

	<div class="row">
		<div class="col-md-12 text-center footer">
			Copyright &copy; 2017. Bootstrap by BW
		</div>
	</div>
</div>
