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
	<link rel="stylesheet" type="text/css" href="css/jquery-labelauty.css">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
  	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  	  <script>
		  $(function() {
		    $( document ).tooltip();
		  });
  </script>
</head>
	
<body>

	<nav class="navbar navbar-default navbar-static-top">
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

	<div id="bg"></div>
	<br>
	<br>
	<br>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-lg-8 col-sm-8" id="form1" >
				<form action="php/remote.php" method="post" id="regForm">
					<p class="lead" id="ani1">REGISTRATI GRATUITAMENTE.</p> 
					<div class="form-group">
						<label for="inputName">Nome: </label>
							<input type="text" class="form-control" id="inputName" placeholder="Nome" name="inputName">
					</div>
					<div class="form-group">
						<label for="inputLastName">Cognome: </label>
							<input type="text" class="form-control" id="inputLastName" placeholder="Cognome" name="inputLastName">
					</div>
					<div class="form-group">
						<label for="inputDateOfBirth">Data di nascita: </label>
						  <script>
							  $(function() {
							    $( "#datepicker" ).datepicker();
							  });
						  </script>
						  <input data-validation-format="dd/mm/yyyy" type="text" id="datepicker" data-validation="birthdate" class="form-control">
					</div>
					<div class="col-md-0 col-lg-0 col-sm-0 col-md-offset-6 col-lg-offset-6 col-ms-offset-6">
						<p>
							<a class="chooseSex" id="ani1Par" data-sex="false"><img id="imgWoman" src="data:image/png;base64,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"/></a>
							<a class="chooseSex" id="ani2Par" data-sex="false"><img id="imgMan" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAFjElEQVR4nO2bfWhXVRjHP7+9OXMtFXPllvMlKuzVLDEo0gQjKCMnIfYCEsxR9pf/lWZlYEYvlASFL38sS7NipVm2Xqggc5hYhC2lslKXlvSysm1uevvjuRfvbvfcc+77hfrCl+G8z3m+33NfzjnPOYP/kRuqgEuAGUAT0OxiE3A1cFZu6lJAGXAt8AzQAfQBlgH3A08CE7KXnAxGAA8BBzAzrGIvsBQoZSs/OoYCDwC/E8+4l6uzNBEV04G9JGvczZbMnIREObAcOEl65i3gT2C0K28tcCZwRprmdBgOvEO6xt18FlgCfOH63QngS2Al0JCu3cFosBNnZd6EfcjoUZ2ibwAuBH7M0aiOe4AL0jJ/DfBrAUzqeBi4KGnztwA9BTBnyp+B8UmZvxsYKICpsPwMmYJHRgl4uABG4vCJqOZrgdcKYCAujwPnhjV/MdBZAPFJ8VVT42XAYmQhkrfoJHkCaNSZnwrsKIDYtLhIZXwUsNbupbxFpsl1XuOjgRXAHwUQlwXfdow3Inf87wKIypK7nA5Ic91eZHY4HfB5AcTkwXanAxqQV8C0SJknPwVeSaitl/BgDFJ0/KYARr3cB8xBpuJ1wF8JtLnE2wEOSsBMYD35fxg/QvYIyj0alyfQdpOqA9zYloPp35Ax+vIAXdXAVzFynESeJC2OKhrYDHQlaPpb2/SNwBATYcBlwLGI+XabJJigCD7kuqYemAXcC6wC2oDtyHfkCFIt6rF/fg98DXwArAHuR4oqcba/biZaXWKlSeM3KILbg4JywFzCj2DXmTS8SBFsWlAYAlyJLKW9H7GwqAAuBaYAlT7/Pw34QaHXyyN2e9qE7YoG7jIQPBV55J2YncBYgzg/TGTwZG0f0qle1ACPAt0K3Q53oLkhZcDLAQ00awRXITu63rhtmjgVtvu01Wnr9EMtsEAR53AdAZusLQGBFrBMI/gKRdwAMEwT68WoAB3na2JXaHzc4Rc0EhmHgwKf0ySepIjrwf/9DUIN6rqE7pXaoPFx2G5/EILu/rtIOfwTTeIy/CtJazVxKmzyaet9g7gOYCHwsU+8w9u8Qe8pLtzIqXfuHuA0TfJ6YCvQj9z51fj0tiGGI9PyXqSi24Z+FjeSUx/rCmAL/r7avIGHFBe6d1pLmJupJvxjr0Il5hudp3v+rXot93oT+L1vByNLLhb8Tqocc19Qwr8Dukn+XE4lMn3+EPgJWXV2Ie92MwYTlQj5juPvbRAO+lxkIae7ksQyRR6HixPON1uRZ4/3Qr8vroUsPaPO5PwwDllReu9KL1LxGZNgronAd/j7+teBqzmKCy1kRbfJ5tyExNUghyWnI9Nb3ehiipuAF5DODCrzz/QGVmC2B7jLG1gwBI39Dnei+LbNwGyNPS1NBzEwGb32PmSlqkQL+qNuRasLONhMsO4BYL5JQ/PRb5Pdnqz22LiVYL1HkRHBGPXI4WbVGvsXZMVWBIxA5hR+OruBxxh8uDIUmhQNW8jkJda5mwRQZetI9UndGpBgPfme4l6j0GUhC7xEMJ7gMvTTxK/9hUUJqfCqNPUC5yWZcEFAMgv5Akdd9obFMPSHthamkfhxTdLd+Bctk8QkZDIWpGNVWsnLgTc1yfuRjkr6aahBHnm/lZ33vU/1dRyKusriZheyAxT3j5/qgPtQF2zcfIvwxddIqABaDQRZyNRzI3AnshI0QSNSud2A+c7Pi2Q8JJeAB5FH3kSgwwPInWpFzvQvtX+22r833eVxOAA8gnqvIHVcRX4HK/Yjf2OYO2qAp8juVGkfMk2vzcJcGJwDPI/+Sx2V/cjMrzErQ1ExFhkB4pzkcLMT+VaMy9BDYpiMDGOvYzaUWcgQ+gZymGlK9pLTRR2yiToLmIeUwucB1yOVmrPzk/Yfwz90o0UkoX/MsgAAAABJRU5ErkJggg=="/></a>
						</p>
					</div>
					
					<div class="form-group">
						<label for="inputEmail">Email: </label>
							<input type="email" class="form-control" id="inputEmail" placeholder="Email" name="inputEmail">
					</div>
					<div class="form-group">
						<label for="inputName">Username: </label>
							<input type="text" title="min. 4, max. 20 caratteri " class="form-control" id="inputUsername" placeholder="username" name="inputUsername">
					</div>
					<div class="form-group">
						<label for="inputPassword">Password: </label>
							<input type="password" class="form-control" id="inputPassword" placeholder="Password" name="inputPassword">
					</div>
					<div class="form-group">
						<label for="inputRepeatPassword">Repeat password: </label>
							<input type="password" class="form-control" id="inputRepeatPassword" placeholder="Repeat Password" name="inputRepeatPassword">
					</div>
					<input type="checkbox" class="move" checked="false"> <p class="move move2">Accetto l'informativa.</p>
					<br>
					<button type="submit" class="btn btn-default move" id="sendForm">Registrati</button>
					<div id="ani3Button"><img src="img/couple.png" /></div>
				</form>
				<div id="dialog" title="Warning!"></div>
			</div>
			<div class="col-md-4 col-lg-4 col-sm-4">
				<p id="faceLogin" style="display:none"><a href="#">Login con FACEBOOK</a></p>
			</div>
		</div>
	</div>
	<br>
	<br>
	<br>
	<hr>
	
	
	<!--load bootstrap functions -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="jquery-ui/external/jquery/jquery.js"></script>
	<script src="jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/jquery-labelauty.js"></script>
</body>
</html>