@extends('layouts.employer')
@section('content')



		<div class="row small-spacing">
			<div class="col-12">
				<div class="box-content">
					<h4 class="box-title">All Posted Jobs</h4>
					<!-- /.box-title -->
					
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
		




@endsection