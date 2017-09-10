<div class="container-fluid">
	<div class="row">
		<div class="col-md-12 header">
			<h1> Student Management System</h1>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-4 col-xs-4 col-sm-4 up">
			<h3><b> Menu </b></h3>
		</div>
		
		<div class="col-md-8 ">
			<h3><b> View Courses </b></h3>
		</div>
	</div>
	
	<div class="row">
		<div class="col-sm-4 dash" >
			<h3><a href=""> Students </a></h3>
		</div>
		
		
		<div class="col-sm-8 " >
			<h3>Courses: </h3>
		</div>
		
		
	</div>
	
	<div class="row">
		<div class="col-sm-4 contents dash" >
			<h3><a href="viewcourses"> Courses </a></h3>
		</div>
		
		
		<div class="col-sm-8 contents">
			<table class="table table-striped table-hover table-condensed table-responsive">
				<thead>
					<tr>
						<td>Course ID </td>
						<td>Course Name </td>
						<td>Course Description </td>
					</tr>
				</thead>
				<tbody>
				<?php
				foreach($courses as $s){
					echo '	<tr>
								<td>'.$s['cid'].'</td>
								<td>'.$s['cname'].'</td>
								<td>'.$s['cdesc'].'</td>
							</tr>
							';
				}
				?>
				</tbody>
			</table>			
			
			<div class="">
				<a href="add_course" class="btn btn-info btn-md">Add Course</a>
				<a href="http://localhost/Bernabe-Waje/boots"; class="btn btn-success btn-md">Back</a>
			</div>
		</div>
		
	</div>

	<div class="row">
		<div class="col-md-12 text-center footer">
			Copyright &copy; 2017. Bootstrap by BW
		</div>
	</div>
</div>
