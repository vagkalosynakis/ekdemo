<!DOCTYPE html>
<html>
<head>
	<title>EK demonstration</title>

	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.11.1/bootstrap-table.min.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.11.1/bootstrap-table.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<script type="text/javascript" src="scripts/coloring.js"></script>
	<script type="text/javascript" src="scripts/searchfilter.js"></script>
	<script type="text/javascript" src="scripts/json.js"></script>
	<script type="text/javascript" src="json/users.json"></script>

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
						<li><a href="tables.php">Tables/Json</a></li>
					</ul>

					<!-- LOGIN FORM -->	
					<ul class="nav navbar-nav navbar-right">
						<?php if(!isset($_SESSION['u_id'])){ ?>
						<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Login</b><span class="caret"></span></a>
							<ul class="dropdown-menu">
								<div style="margin: 0 10px;">
									<form name="login" action="func/login.php" method="POST">
									  <div class="form-group">
									    <label for="userid">Username or Email address:</label>
									    <input type="text" placeholder="e.g gsmith1..." class="form-control" name="userid">
									  </div>
									  <div class="form-group">
									    <label for="pwd">Password:</label>
									    <input type="password" class="form-control" name="pwd">
									  </div>
									  <button type="submit" name="submit" class="btn btn-default">Submit</button>
									</form>
								</div>
					        </ul>
						</li>
						<?php }?>

						<!-- REGISTER FORM -->
						<?php if(!isset($_SESSION['u_id'])){ ?>
						<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Register</b><span class="caret"></span></a>
							<ul class="dropdown-menu">
								<div style="margin: 0 10px;">
									<form name="logout" action="func/register.php" method="POST">
									  <div class="form-group">
									    <label for="fname">First Name:</label>
									    <input type="text" placeholder="e.g George..." class="form-control" name="fname">
									  </div>
									  <div class="form-group">
									    <label for="lname">Last Name:</label>
									    <input type="text" placeholder="e.g Smith" class="form-control" name="lname">
									  </div>
									  <div class="form-group">
									    <label for="email">E-mail Address:</label>
									    <input type="email" placeholder="e.g gsmith@example.com..." class="form-control" name="email">
									  </div>
									  <div class="form-group">
									    <label for="userid">Username:</label>
									    <input type="text" placeholder="e.g gsmith1..." class="form-control" name="userid">
									  </div>
									  <div class="form-group">
									    <label for="pwd">Password:</label>
									    <input type="password" class="form-control" name="pwd">
									  </div>
									  <button type="submit" name="submit" class="btn btn-default">Register</button>
									</form>
								</div>
					        </ul>
						</li>
						<?php }?>

						<!-- LOGOUT -->
						<?php if(isset($_SESSION['u_id'])){ ?>
						<li>
							<form action="func/logout.php" method="POST">
								<button class="btn btn-primary navbar-right" type="submit" name="submit">Logout</button>
							</form>
						</li>
						<?php }?>

					</ul>
				</div>
			</div>
		</div>
