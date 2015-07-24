<!DOCTYPE html>
<html lang="it">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>clickMeet</title>
	<link href='http://fonts.googleapis.com/css?family=Oswald:700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Luckiest+Guy' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Josefin+Slab:400italic' rel='stylesheet' type='text/css'>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/new_main.css">
	<link rel="stylesheet" href="jquery-ui/jquery-ui.min.css">

</head>
	
<body>

	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#barraNavigazione" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <p class="logoText" class="navbar-brand"><i class="fa fa-heartbeat fa-lg"></i>clickMeet</p>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="barraNavigazione">
				<ul>
					<div class="container-fluid">
						<form class="navbar-form navbar-right nav navbar-nav">
							<div class="form-group form-group-sm">	
								<label for="username"></label>
								<input type="text" name="username" placeholder="username" class="form-control text-left">
							</div>
							<div class="form-group form-group-sm">	
								<label for="password"></label>
								<input type="password" name="password" placeholder="password" class="form-control text-left">
							</div>
							<button type="submit" class="btn btn-info" id="submitLogin"> Login </button>
						</form>
						<p class="text-right"><a href="#">Password dimenticata?</a></p>
					</div>
				</ul>
			</div>
		</div>
	</nav>


	<br>
	<br>
	<br>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-lg-8 col-sm-8" id="regForm">
				<form action="php/remote.php" method="post">
					<p class="lead">REGISTRATI GRATUITAMENTE.</p>
					<div class="form-group">
						<label for="inputName">Nome: </label>
							<input type="text" class="form-control" id="inputName" placeholder="Nome" name="inputName">
					</div>
					<div class="form-group">
						<label for="inputLastName">Cognome: </label>
							<input type="text" class="form-control" id="inputLastName" placeholder="Cognome" name="inputLastName">
					</div>
					<div class="radio">
						<label class="radio-inline" for="gender">
							<input type="radio" name="genderRadio" value="m" checked="true" />M
						</label>
						<label class="radio-inline" for="gender">
							<input type="radio" name="genderRadio" value="f" />F
						</label>
					</div>
					<div class="form-group">
						<label for="inputEmail">Email: </label>
							<input type="email" class="form-control" id="inputEmail" placeholder="Email" name="inputEmail">
					</div>
					<div class="form-group">
						<label for="inputPassword">Password: </label>
							<input type="password" class="form-control" id="inputPassword" placeholder="Password" name="inputPassword">
					</div>
					<div class="form-group">
						<label for="inputRepeatPassword">Password: </label>
							<input type="password" class="form-control" id="inputRepeatPassword" placeholder="Repeat Password" name="inputRepeatPassword">
					</div>
					<input type="checkbox"> Accetto l'informativa.
					<br>
					<button type="submit" class="btn btn-default" id="sendForm">Registrati</button>
				</form>
				<div id="dialog" title="Warning!"></div>
			</div>
		</div>
	</div>
	<br>
	<br>
	<br>
	<hr>
	
	
	<!--load bootstrap functions -->
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="jquery-ui/external/jquery/jquery.js"></script>
	<script src="jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>