<?php
	session_start();
	if(isset($_SESSION["id"]))
		header("Location: home.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta name="gmapkey" content="" />
<meta name="description" content="" />
<meta name="keywords" content="" />

<title>Club Deportivo Coquimbo Unido</title>

<!--<link rel="shortcut icon" href="includes/icons/favicon.png">-->

<link rel="stylesheet" type="text/css" href="includes/css/style.css" />
<link rel="stylesheet" type="text/css" href="includes/css/uniform.default.css" />
<!--[if IE]><link rel="stylesheet" type="text/css" href="css/ie.css" /><![endif]-->

<script type="text/javascript" src="includes/js/jquery-1.8.0.min.js"></script>
<script type="text/javascript" src="includes/js/jquery.uniform.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {
	
	$('input, textarea, select, button').uniform();
	
	$("#login").click(function() {
	
		var action = $("#login_form").attr('action');
		var form_data = {
			username: $("#username").val(),
			password: $("#password").val()
		};
		
		$.ajax({
			type: "POST",
			url: action,
			data: form_data,
			success: function(result)
			{
				alert(result);
				if(result == 'success')
					$("#login_form").slideUp('slow', function() {
						$("#message").html("<p class='success'>Ingresado correctamente</p>");
						window.location.replace("home.php");
					});
				else
					$("#message").html("<p class='error'>Nombre de usuario o contraseña incorrectos</p>");
			}
		});
		return false;
	});
	
});

</script>

</head>
<body>
<div id="pag">
	
	<div id="header">
		<div id="izq">
			<img src="includes/images/cdcu_logo.gif" width=150 height=150 alt="logo" />
		</div>
		<div id="der">
			<h1>Tierra de Fuego</h1>
			<h2>CLIENTES</h2>
		</div>
	</div>
	
	<div id="cuerpo">
		<div id="izq" align="center">
			<img src="includes/images/logoanfp.png" alt="ANFP" />
			<img src="includes/images/logofederacion.png" alt="FEDERACION DE FUTBOL DE CHILE" width=150 />
		</div>
		
		<div id="der">
			<h4>Introduzca su RUT y contraseña</h4>
			<form method="post" action="doLogin.php" id="login_form" />
			<ul>
			<li><label>RUT</label><input name="username" type="text" id="username" value="" maxlength="20" size="65" /></li>
			<li><label>Contraseña</label><input name="password" type="password" id="password" value="" maxlength="20" size="65" /></li>
			<li><input name="login" type="submit" id="login" value="Ingresar" /></li>
			</ul>
			</form>
			<div id="message"></div>
		</div>
		
	</div>
	<div id="footer">
		<p>Club Deportivo Coquimbo Unido &copy; 2012 Todos los derechos reservados</p>
	</div>
</div>
</body>
</html>