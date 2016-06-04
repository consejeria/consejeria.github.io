<!DOCTYPE html>
<html>
	<head>
<link rel="stylesheet" href="css/style.css" type="text/css" />
		
	</head>
	<body>
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
			<h2 >Formulario para consultar el horario del CURSO</h2>
		</header>
	



<form id="formularioConsulta" method="GET" action="horarioCurso.php">
	<fieldset>
		<legend>Consulta</legend>
		<label class="datosConsulta" for='ficha'>Digite su ficha</label>
<input class="campo" type="text" name='ficha' id='ficha' required>
<input class="botonConsulta" type="submit" value="Consultar horario de Ficha">

	</fieldset>
</form>
</body>
	<footer>
		2016 + Soporte: jeandradec@misena.edu.co + manuel.celemin@misena.edu.co
	</footer>
	
</html>