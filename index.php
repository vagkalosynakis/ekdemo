<?php
	session_start();
	include_once "_header.php"
?>

	<div class="jumbotron">
		<div class="container">
			<h2><i>Some information about me.</i></h2>
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
	<div class="row">
		<div class="col-xs-12 col-sm-6 col-md-6">
			<div class="well">
				<h4>Dear Sir/Madam,</h4>
				<p>This letter is to express my interest in your posting for a position in IT. I hold a BSc degree in Informatics Engineering and I have working experience in the IT industry. The key features I can offer on this position are:</p>
				<p>- A keen eye on detail which is important in this line of work and which I have developed during my time as an IT Support Technician and during my bachelor's.</p>
				<p>- Cooperative spirit and willing to work in a team, a skill developed through the amounts of hours working on team projects both during my previous employment and during laboratory assignments in the University.</p>
				<p>- Ambition and will for self-improvement, in order to improve in the field as well as evolve my career.</p>
				<p>I am confident I will be an asset to your organization and I look forward to speaking with you about this opportunity.</p>
				<p>Sincerely,</p>
				<p>Evangelos</p>
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-6">
			<div class="well">
				<h2><i>Additional Information.</i></h2>
				<h4>Programming Languages I've used:</h4>
				<ul>
					<li><strong><i>C:</i></strong> Basic programming, part of academic course.</li>
					<li><strong><i>C#:</i></strong> Used in the development of an e-shop hosted in my University server during the bachelor's as well as in Game Development courses.</li>
					<li><strong><i>Java:</i></strong> Developed a number of applications including dissertation project and an XML parser.</li>
					<li><strong><i>R:</i></strong> Representation of gene expressions based on a given dataset, part of academic course.</li>
					<li><strong><i>MySQL:</i></strong>  extensive usage during the bachelor's courses.</li>
					<li><strong><i>HTML, CSS, PHP, Javascript:</i></strong> developed a website application including, but not limited to, actions like logging in, registering and deleting an account from a database, presenting of news and calendar operations.</li>
					<li><strong><i>MatLab:</i></strong> Developed algorithms for Data mining and Neural Networks as part of academic courses.</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="well">
				<h4><i>Personal Skills</i></h4>
				<ul><li>Full Driving License(A – 2012, B - 2009)</li></ul>
				<h4><i>Languages</i></h4>
				<ul>
					<li>Greek (Native)</li>
					<li>English (Proficient)</li>
				</ul>
				<h4><i>Personal Interests</i></h4>
				<ul>
					<li>Running. </li>
					<li>Mountaineering. </li> 
				</ul>
			</div>
		</div>
	</div>
</div>

<?php
	include_once "_footer.php"
?>