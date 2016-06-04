<!DOCTYPE html>
<html>
<head>
	<title>crearEnlace</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<header>
	
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
	
<div id="contenedorCrearEnlace">
	

	<section class="formulario">
		<hgroup>
			<h2>Creación de enlace para Aprendices</h2>
		</hgroup>
		<form id="formularioEnlace" method="POST" action="recibirInstructor.php">
			<fieldset id="enlaceFieldset">
				<legend>Datos necesario para crear el enlace</legend>

			<label class="datosEnlace" for="documentoInstructor">Documento Instructor</label>
			<input class="campoEnlace" type="text" id="documentoInstructor" name="documentoInstructor" placeholder="Sin puntos ni comas" required>
			<label class="datosEnlace" for="nombreInstructor">Nombre Completo Instructor (a)</label>
			<input class="campoEnlace" type="text" id="nombreInstructor" name="nombreInstructor" placeholder="Nombres y Apellidos">
			<label class="datosEnlace" for="idFicha">ID Ficha</label>
			<input class="campoEnlace" type="text" id="idFicha" name="idFicha" placeholder="Sin puntos ni comas" required>
			<label class="datosEnlace" for="programa">Nombre Programa</label>
			<input class="campoEnlace" type="text" id="programa" name="programa" placeholder="Digite el nombre Completo" required>
			
			<label class="datosEnlace" for="fechaInicio">Fecha de inicio</label>
			<input class="campoEnlace" type="date" id="fechaInicio" name="fechaInicio" required>
			<label class="datosEnlace" for="fechaFin">Fecha de Fin</label>
			<input class="campoEnlace" type="date" id="fechaFin" name="fechaFin" required>
			<div>
			<input type="submit" name="enviar" value="Crear enlace para Aprendices" id="botonEnlace">
			</div>
			</fieldset>
			
		</form>
	</section>


	</div>
</header>
<footer>
	2016 + Soporte: jeandradec@misena.edu.co + manuel.celemin@misena.edu.co
</footer>

</body>
</html>