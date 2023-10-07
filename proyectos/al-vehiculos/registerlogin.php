<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="slide navbar style.css">
	<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/login.css">
</head>
<body>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<section class="signup">
				<form action="" method="post">
					<label for="chk" aria-hidden="true">Registrate</label>
						<input type="text" name="nombre" id="nombre" placeholder="Nombre" required="">
						<input type="text" name="apellido" id="apellido" placeholder="Apellido" required="">
						<input type="text" name="cedula" id="cedula" placeholder="Número de Documento" required="">
						<input type="text" name="telefono" id="telefono" placeholder="Número de Teléfono" required="">
						<input type="email" name="email" id="email" placeholder="Correo Electrónico" required="">
						<input type="password" name="contraseña" id="contraseña" placeholder="Contraseña" required="">
					<button type="submit" name="registrar" value="registrar">Crea tú cuenta</button>
				</form>
			</section>

			<section class="login">
				<form action="" method="post">
					<label for="chk" aria-hidden="true" id="login">Inicia Sesión</label>
					<input type="email" name="email" id="email" placeholder="Correo Electrónico" required="">
					<input type="password" name="contraseña" id="contrasela" placeholder="Contraseña" required="">
					<button type="submit" name="login" value="login">Iniciar Sesión</button>
				</form>
			</section>
	</div>
</body>
	
<script>
function cerrarAlerta() {
  document.querySelector('.alert').style.display = 'none';
}

setTimeout(cerrarAlerta, 5000);
</script>

<script>
	function mostrarAlerta(mensaje, tipo) {
  var alerta = document.createElement('div');
  alerta.classList.add('alert');
  alerta.classList.add(tipo);
  alerta.innerHTML = mensaje + '<span class="closebtn" onclick="cerrarAlerta(this)">&times;</span>';
  document.body.appendChild(alerta);
  setTimeout(function(){ cerrarAlerta(alerta); }, 3000);
}

function cerrarAlerta(alerta) {
  alerta.style.opacity = '0';
  setTimeout(function(){ alerta.style.display = 'none'; }, 500);
}

</script>
</html>
<?php
include("php/registro.php");
include("php/login.php");
?>


