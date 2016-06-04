<!DOCTYPE html>
<html>
	<head>
<link rel="stylesheet" href="css/style.css" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta charset="UTF-8"/>


	</head>
	<body>
		<header>
			<header id="encabezadoConsulta">
			<nav id="menu">
			<ul>
				<li>
					<a href="index.html">SCH</a>
				</li>
				
				<li>
					<a href="crearEnlace.php">Crear enlace</a>
				</li>
				<li>
					<a href="consultaCurso.php">Consutlar Ficha</a>
				</li>
				<li>
					<a href="consultaEstudiante.php">Consultar Aprendiz</a>
				</li>
				<li>
					<a href="consultaGrupos.php">Consultar Grupos</a>
				</li>
				
			</ul>
		</nav>
		<h2>Formulario para consultar el horario del APRENDIZ</h2>
	</header>
<form id="formularioConsulta" method="GET" action="horarioEstudiante.php">
	<fieldset>
		<legend>Consulta</legend>
	<label class="datosConsulta" for='documento'>Digite el documento del aprendiz a Consultar</label>
	<input class="campo" type="text" name='documento' id='documento' placeholder="Numero Sin puntos ni comas" required></input>
	<input class="botonConsulta" type="submit" value="Consultar Aprendiz"></input>	
	</fieldset>
	
</form>


<footer>
	2016 + Soporte: jeandradec@misena.edu.co + manuel.celemin@misena.edu.co
</footer>
	</body>
	
</html>
