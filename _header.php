<!DOCTYPE html>
<html>
<head>
	<title>EK demonstration</title>

	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script type="text/javascript" src="./scripts/coloring.js"></script>
	<script type="text/javascript" src="./scripts/searchfilter.js"></script>

</head>

<!-- Header content -->
<body>
	<header>
		<div class="navbar navbar-fixed-top navbar-inverse">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div class="collapse navbar-collapse" id="example">
					<ul class="nav navbar-nav">
						<li><a href="index.php">Home</a></li>
						<li><a href="education.php">Education</a></li>
						<li><a href="experience.php">Experience</a></li>
						<li><a href="js.php">JS Demo</a></li>
						<li><a href="tables.php">SQL/Json</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Login</b><span class="caret"></span></a>
							<ul class="dropdown-menu">
								<div style="margin: 0 10px;">
									<form action="/action_page.php">
									  <div class="form-group">
									    <label for="email">Email address:</label>
									    <input type="email" class="form-control" id="email">
									  </div>
									  <div class="form-group">
									    <label for="pwd">Password:</label>
									    <input type="password" class="form-control" id="pwd">
									  </div>
									  <button type="submit" class="btn btn-default">Submit</button>
									</form>
								</div>
					        </ul>
						</li>
						<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Register</b><span class="caret"></span></a>
							<ul class="dropdown-menu">
								<div style="margin: 0 10px;">
									<form action="/action_page.php">
									  <div class="form-group">
									    <label for="email">Email address:</label>
									    <input type="email" class="form-control" id="email">
									  </div>
									  <div class="form-group">
									    <label for="pwd">Password:</label>
									    <input type="password" class="form-control" id="pwd">
									  </div>
									  <button type="submit" class="btn btn-default">Register</button>
									</form>
								</div>
					        </ul>
						</li>
						<?php if(true){ ?>
						<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Logout</b><span class="caret"></span></a>
							<ul class="dropdown-menu">
								<div style="margin: 0 10px;">
									<form action="/action_page.php">
									  <div class="form-group">
									    <label for="email">Email address:</label>
									    <input type="email" class="form-control" id="email">
									  </div>
									  <div class="form-group">
									    <label for="pwd">Password:</label>
									    <input type="password" class="form-control" id="pwd">
									  </div>
									  <button type="submit" class="btn btn-default">Submit</button>
									</form>
								</div>
					        </ul>
						</li>
						<?php }?>
					</ul>
				</div>
			</div>
		</div>
