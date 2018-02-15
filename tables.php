<?php
	session_start();
	include_once "_header.php"
?>	

	<div class="jumbotron">
		<div class="container">
			<h2><i>A bit of JavaScript.</i></h2>
		</div> 
	</div> 
</header>

<!-- Main Content -->
<div class="container">
	<div class="row">
		<?php if(isset($_SESSION['u_id'])){ ?>
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="well">
				<h2 style="text-align: center;">You are logged in!</h2>
			</div>
		</div>
		<?php }?>
	</div>
	<div class="row well">
		<!-- Table 1 -->
		<div class="col-xs-12 col-sm-12 col-md-6">
			<button class="btn btn-primary btn-block tablebtn" data-toggle="collapse" data-target="#table1">Collapse</button>
			<div id="table1" class="collapse in">
			    <h2 style="text-align: center;">Expanded Table 1</h2>
			    <input type="text" id="usersFilter" onkeyup="searchTable()" placeholder="Search for names.." class="col-xs-12">
				<table 	id="users" class="table table-striped table-hover table-condensed">
					<thead>
			            <tr>
			                <th class="col-xs-1 col-sm-1 col-md-1" data-field="id" data-sortable="true">Item ID</th>
			                <th class="col-xs-5 col-sm-5 col-md-5" data-field="Name" data-sortable="true">Item Name</th>
			                <th class="col-xs-6 col-sm-6 col-md-6" data-field="Address" data-sortable="true">address</th>
			            </tr>
			        </thead>
				</table>
			</div>
		</div>
		<!-- Table 2 -->
		<div class="col-xs-12 col-sm-12 col-md-6">
			<button class="btn btn-primary btn-block tablebtn" data-toggle="collapse" data-target="#table2">Collapse</button>
			<div id="table2" class="collapse in">
			    <h2 style="text-align: center;">Expanded Table 1</h2>
			    <input type="text" id="carsFilter" onkeyup="searchTable()" placeholder="Search for makes.." class="col-xs-12">

				<table 	id="cars" class="table table-striped table-hover table-condensed">
					<thead>
			            <tr>
			                <th class="col-xs-4 col-sm-4 col-md-4" data-field="Make" data-sortable="true">Make</th>
			                <th class="col-xs-6 col-sm-6 col-md-6" data-field="Model" data-sortable="true">Model</th>
			                <th class="col-xs-5 col-sm-5 col-md-5" data-field="Color" data-sortable="true">Color</th>
			            </tr>
			        </thead>
				</table>
			</div>
		</div>
	</div>
	<!-- Table 3 -->
	<div class="row well">
		<div class="col-xs-12 col-sm-12 col-md-12">
			<button class="btn btn-primary btn-block tablebtn" data-toggle="collapse" data-target="#table3">Expand</button>
			<div id="table3" class="collapse">
			    <h2 style="text-align: center;">Collapsed Table</h2>
			    <input type="text" id="rdFilter" onkeyup="searchTable()" placeholder="Search for rd.." class="col-xs-12">
				<table 	id="rd" class="table table-striped table-hover table-condensed">
					<thead>
			            <tr>
			                <th class="col-xs-1 col-sm-1 col-md-1" data-field="rd1" data-sortable="true">rd1</th>
			                <th class="col-xs-5 col-sm-5 col-md-5" data-field="rd2" data-sortable="true">rd2</th>
			                <th class="col-xs-6 col-sm-6 col-md-6" data-field="rd3" data-sortable="true">rd3</th>
			            </tr>
			        </thead>
				</table>
			</div>
		</div>
	</div>
</div>

<?php
	include_once "_footer.php"
?>