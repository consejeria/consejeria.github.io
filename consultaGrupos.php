<!DOCTYPE html>
<html>
	<head>
<link rel="stylesheet" href="css/style.css" type="text/css" />
<meta charset="utf-8"/>		
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
			<h2 >Formulario para Consultar GRUPOS</h2>
		</header>
	



<form id="formularioConsulta" method="GET" action="gruposCurso.php">
	<fieldset>
		<legend>Consulta</legend>
		<label class="datosConsulta" for='ficha'>Digite su ficha</label>
<input class="campo" type="text" name='ficha' id='ficha' required>

<div class="cantidadGrupos">
<label for="cantidadGrupos">Cantidad mínima de aprendices: </label>	
<select name="cantidadGrupos" id="cantidadGrupos">
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
</select>
	
</div>
<input class="botonConsulta" type="submit" value="Consultar GRUPOS de Ficha">

	</fieldset>
</form>
</body>
	<footer>
		2016 + Soporte: jeandradec@misena.edu.co + manuel.celemin@misena.edu.co
	</footer>
	
</html>