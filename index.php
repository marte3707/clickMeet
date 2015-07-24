<!DOCTYPE html>
<html>
<head>
	<title>clickMeet</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link href='http://fonts.googleapis.com/css?family=Oswald:700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Luckiest+Guy' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Josefin+Slab:400italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

</head>
<body>

	<div class="navbar">
		<ul class="menu">
			<li class="logo">
				<h1 class="logoText"><i class="fa fa-heartbeat fa-lg"></i>ClickMeet</h1>
			</li>	
			<li class="loginMenu">
				<label for="password"></label>
				<input type="password" name="password" placeholder="password" >
			</li>
			<li class="loginMenu">
				<label for="username"></label>
				<input type="username" name="username" placeholder="username" >
				<p id="forgottenPassword"><a href="#">password dimenticata?</a></p>
			</li>
		</ul>
	</div>

	<div class="start">
		<h3 class="header">Inizia subito!</h3>
	</div>

	<div class="header-body-left">
		<div>
			<h4>REGISTRATI</h4>
			<form class="form" method="post" action="#">
				<p>
					<label for="Nome">Nome</label>
					<input type="text" name="name" id="name_form">
				</p>
				<p>
					<label for="Cognome">Cognome</label>
					<input type="text" name="surname" id="surname_form">
				</p>
				<p>
					<label for="email">Email</label>
					<input type="email" name="email" id="name_form">
				</p>
				<p>
					<label for="Nome">Password</label>
					<input type="password" name="password" id="passwordx;">
				</p>
			</form>
		</div>
	</div>

	


<script type="text/javascript" src="js/main.js"></script>
</body>
</html>