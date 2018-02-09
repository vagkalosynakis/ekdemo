<?php
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
		<div class="col-xs-12 col-sm-12 col-md-12">
			<button class="btn btn-primary btn-lg btn-block" data-toggle="collapse" data-target="#Foo">Toggle Bar</button>
			<div id="Foo" class="collapse">
			    <h2 style="text-align: center;">Bordered Table</h2>
			    <input type="text" id="filter" onkeyup="searchTable()" placeholder="Search for names.." class="col-xs-12">

			    <?php if(1==1){ ?>
				<table id="users" class="table table-striped table-hover table-condensed table-responsive">
					<thead>
						<tr>
							<th class="col-xs-3">Firstname</th>
							<th class="col-xs-3">Lastname</th>
							<th class="col-xs-6">Email</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="col-xs-3">John</td>
							<td class="col-xs-3">Doe</td>
							<td class="col-xs-6">john@example.com</td>
						</tr>
						<tr>
							<td class="col-xs-3">Mary</td>
							<td class="col-xs-3">Moe</td>
							<td class="col-xs-6">mary@example.com</td>
						</tr>
						<tr>
							<td class="col-xs-3">July</td>
							<td class="col-xs-3">Dooley</td>
							<td class="col-xs-6">july@example.com</td>
						</tr>
						<tr>
							<td class="col-xs-3">John</td>
							<td class="col-xs-3">Doe</td>
							<td class="col-xs-6">john@example.com</td>
						</tr>
						<tr>
							<td class="col-xs-3">John</td>
							<td class="col-xs-3">Doe</td>
							<td class="col-xs-6">john@example.com</td>
						</tr>
					</tbody>
				</table>
				<?php } ?>
			</div>
		</div>
	</div>

<?php
	include_once "_footer.php"
?>