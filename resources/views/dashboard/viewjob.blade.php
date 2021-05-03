@extends('layouts.master')
@section('content')

<div id="wrapper">
	<div class="main-content">
		<div class="row small-spacing">
			<div class="col-12">
				<div class="box-content">
					<h4 class="box-title">All Posted Jobs</h4>
					<!-- /.box-title -->
					<div class="dropdown js__drop_down">
						<a href="#" class="dropdown-icon glyphicon glyphicon-option-vertical js__drop_down_button"></a>
						<ul class="sub-menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else there</a></li>
							<li class="split"></li>
							<li><a href="#">Separated link</a></li>
						</ul>
						<!-- /.sub-menu -->
					</div>
					<!-- /.dropdown js__dropdown -->
					<table id="example" class="table table-striped table-bordered display" style="width:100%">
						<thead>
							<tr>
								<th style="width: 40px">Company Name</th>
								<th style="width: 40px">Job Title</th>
								<th style="width: 40px">Location</th>
								<th style="width: 40px">Salary Range</th>
								<th style="width: 40px">Job Posted Date</th>
								<th style="width: 30px">Status</th>
								<th style="width: 70px">Action</th>
							</tr>
						</thead>
						<?php if(!empty($newjobs)) {?>
							<?php
							 foreach($newjobs as $newjob) { ?>
							 
						<tbody>
							<tr>
								<td>{{Auth::user()->name}}</td>
								<td><?=$newjob->job_title?></td>
								<td><?=$newjob->city?></td>
								<td><?=$newjob->salary?></td>
								<td><?=$newjob->created_at?></td>
								<td><a><input type="button" name="Active" value="Active"  class="btn btn-info btn-xs active" /></a></td>
								<td><input type="button" name="View" value="View"  class="btn btn-info btn-xs View" />&nbsp;&nbsp;<input type="button" name="delete" value="Delete Job"  class="btn btn-info btn-xs Danger Deactivate" /></td>
							</tr>
							
						</tbody>
						<?php               
             				}
            				?>
						<?php
							}            
						?>   
					</table>
				</div>
				<!-- /.box-content -->
			</div>
			

	
		</div>
		<!-- /.row small-spacing -->		
		
	</div>
	<!-- /.main-content -->
</div>


@endsection