@extends('layouts.admin')
@section('content')

<div id="wrapper">
	<div class="main-content">
		<div class="row small-spacing">
			<div class="col-12">
				<div class="box-content">
					<h4 class="box-title">All Staff</h4>
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
								<th style="width: 40px">Name</th>
								<th style="width: 40px">city</th>
								<th style="width: 40px">country</th>
								<th style="width: 40px">Phone</th>
								<th style="width: 40px">Role</th>
								<th style="width: 30px">Status</th>
								<th style="width: 70px">Action</th>
							</tr>
						</thead>
						<?php if(!empty($newstaffs)) {?>
							<?php
							 foreach($newstaffs as $newstaff) { ?>
							 
						<tbody>
							<tr>
								<td><?=$newstaff->name?></td>
								<td><?=$newstaff->city?></td>
								<td><?=$newstaff->country?></td>
								<td><?=$newstaff->phone?></td>
								<td><?=$newstaff->role?></td>
								<td><a><input type="button" name="Active" value="Active"  class="btn btn-info btn-xs active" /></a></td>
								<td><input type="button" name="View" value="View"  class="btn btn-info btn-xs View" />&nbsp;&nbsp;<input type="button" name="Deactivate" value="Deactivate"  class="btn btn-info btn-xs Danger Deactivate" /></td>
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