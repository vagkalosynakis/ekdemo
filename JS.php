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
		<div class="col-xs-12 col-sm-12 col-md-6">
			<div class="well well-sm">
				<h3 style="text-align: center;">Change color using JS.</h3>
				<div class="btn-group" style="padding:20px; display:flex; justify-content: center;">
				  <button type="button" class="btn btn-lg c1" onclick="changeColor('#0000ff')">Color</button>
				  <button type="button" class="btn btn-lg c2" onclick="changeColor('#669999')">Color</button>
				  <button type="button" class="btn btn-lg c3" onclick="changeColor('#00ccff')">Color</button>
				  <button type="button" class="btn btn-lg c4" onclick="changeColor('#666699')">Color</button>
				  <button type="button" class="btn btn-lg c5" onclick="changeColor('#ff0000')">Color</button>
				</div>
				<div class="btn-group" style="padding:20px; display:flex; justify-content: center;">
				  <button type="button" class="btn btn-lg c6" onclick="changeColor('#339966')">Color</button>
				  <button type="button" class="btn btn-lg c7" onclick="changeColor('#00ffff')">Color</button>
				  <button type="button" class="btn btn-lg c8" onclick="changeColor('#6699ff')">Color</button>
				  <button type="button" class="btn btn-lg c9" onclick="changeColor('#006600')">Color</button>
				  <button type="button" class="btn btn-lg c10" onclick="hangeColor('#00ff00')">Color</button>
				</div>
				<div class="btn-group" style="padding:20px; display:flex; justify-content: center;">
				  <button type="button" class="btn btn-lg c11" onclick="changeColor('#cc33ff')">Color</button>
				  <button type="button" class="btn btn-lg c12" onclick="changeColor('#99ff99')">Color</button>
				  <button type="button" class="btn btn-lg c13" onclick="changeColor('#ff33cc')">Color</button>
				  <button type="button" class="btn btn-lg c14" onclick="changeColor('#333300')">Color</button>
				  <button type="button" class="btn btn-lg c15" onclick="changeColor('#ffff00')">Color</button>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-6">
			<div id="canvas" class="well"></div>
		</div>
	</div>
</div>

<?php
	include_once "_footer.php"
?>