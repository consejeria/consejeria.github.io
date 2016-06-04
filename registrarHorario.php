<?php

if ($_GET['ficha']){
	$ficha=$_GET['ficha'];
}else {
	$ficha='';
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Horario aprendices</title>
</head>
<body>
	<header>
		<div id="contenedor">
			<section class="formulario">
				<hgroup>
					<h1>Organiza tu propio horario</h1>
					<h5>En este espacio definiras el tiempo que le dedicaras a tu formación en el SENA Virtual. Este es un compromiso contigo mismo y cumpliendolo tienes mayores probabilidades de lograr la Certificación. Además, es información importarte que permitirá a tu Instructor (a) planear los encuentros sincrónicos y apoyar en la organización de Grupos de Trabajo</h5>
				</hgroup>
				<form id="formulario" name="formulario" action="recibir.php" method="post">
					<div >
						<fieldset>
							<legend>Datos personales</legend>
								<label class="datosPersonales" for="tipoDocumento">Tipo de Documento de Identidad:</label>
								<select class="campo" name="tipoDocumento" id="tipoDocumento">
									<option>Cédula de Ciudadanía</option>
									<option>Tarjeta de Identidad</option>
									<option>Cédula de Extrangería</option>
									<option>Número ciego SENA</option>
									<option>Pasaporte</option>
									<option>Documento Nacional de Identidad</option>
									<option>Número de Identificación Tributaria</option>		
								</select>
								<label class="datosPersonales" for="documento">Número de Documento</label>
								<input class="campo" type="text" id="documento" name="documento" placeholder="Sin puntos ni comas" required></input>
								<label class="datosPersonales" for="nombres">Nombres:</label>
								<input class="campo" type="text" id="nombres" name="nombres" required></input>
								<label class="datosPersonales" for="apellidos">Apellidos:</label>
								<input class="campo" type="text" id="apellidos" name="apellidos" required></input>
								<label class="datosPersonales" for="email">Correo electrónico:</label>
								<input class="campo" type="email" id="email" name="email"required ></input>
								
						</fieldset>
						
					</div>
					<div id="contenedorTitulos">
						<table id="tablaTitulos"><tr id="tituloDias"><th>HORA</th><th>Lunes</th><th>Martes</th><th>Miércoles</th><th>Jueves</th><th>Viernes</th><th>Sábado</th><th>Domingo</th></tr>
						<tr>
						<td> 23:59 - 23:59</td>
						<td><input type="checkbox" name="lunes[]" value="0:00"></td>
						<td><input type="checkbox" name="martes[]" value="0:00"></td>
						<td><input type="checkbox" name="miercoles[]" value="0:00"></td>
						<td><input type="checkbox" name="jueves[]" value="0:00"></td>
						<td><input type="checkbox" name="viernes[]" value="0:00"></td>
						<td><input type="checkbox" name="sabado[]" value="0:00"></td>
						<td><input type="checkbox" name="domingo[]" value="0:00"></td>
					</tr>

						</table>

					</div>
					<div id="contenedorTabla">
					<table id="tablaSeleccion"><tr id="tituloDias"><th>HORA</th><th>Lunes</th><th>Martes</th><th>Miércoles</th><th>Jueves</th><th>Viernes</th><th>Sábado</th><th>Domingo</th></tr>
					<tr>
						<td> 0:00 - 0:59</td>
						<td><input type="checkbox" name="lunes[]" value="0:00"></td>
						<td><input type="checkbox" name="martes[]" value="0:00"></td>
						<td><input type="checkbox" name="miercoles[]" value="0:00"></td>
						<td><input type="checkbox" name="jueves[]" value="0:00"></td>
						<td><input type="checkbox" name="viernes[]" value="0:00"></td>
						<td><input type="checkbox" name="sabado[]" value="0:00"></td>
						<td><input type="checkbox" name="domingo[]" value="0:00"></td>
					</tr>	
					<tr>
						<td>1:00 - 1:59</td>
						<td> <input type="checkbox" name="lunes[]" value="1:00"></td>
						<td><input type="checkbox" name="martes[]" value="1:00"></td>
						<td><input type="checkbox" name="miercoles[]" value="1:00"></td>
						<td><input type="checkbox" name="jueves[]" value="1:00"></td>
						<td><input type="checkbox" name="viernes[]" value="1:00"></td>
						<td><input type="checkbox" name="sabado[]" value="1:00"></td>
						<td><input type="checkbox" name="domingo[]" value="1:00"></td>
					</tr>
						<tr>
						<td>2:00 - 2:59</td>
						<td> <input type="checkbox" name="lunes[]" value="2:00"></td>
						<td><input type="checkbox" name="martes[]" value="2:00"></td>
						<td><input type="checkbox" name="miercoles[]" value="2:00"></td>
						<td><input type="checkbox" name="jueves[]" value="2:00"></td>
						<td><input type="checkbox" name="viernes[]" value="2:00"></td>
						<td><input type="checkbox" name="sabado[]" value="2:00"></td>
						<td><input type="checkbox" name="domingo[]" value="2:00"></td>
					</tr>
					</tr>
						<tr>
						<td>3:00 - 3:59</td>
						<td> <input type="checkbox" name="lunes[]" value="3:00"></td>
						<td><input type="checkbox" name="martes[]" value="3:00"></td>
						<td><input type="checkbox" name="miercoles[]" value="3:00"></td>
						<td><input type="checkbox" name="jueves[]" value="3:00"></td>
						<td><input type="checkbox" name="viernes[]" value="3:00"></td>
						<td><input type="checkbox" name="sabado[]" value="3:00"></td>
						<td><input type="checkbox" name="domingo[]" value="3:00"></td>
					</tr>
					<tr>
						<td>4:00 - 4:59</td>
						<td> <input type="checkbox" name="lunes[]" value="4:00"></td>
						<td><input type="checkbox" name="martes[]" value="4:00"></td>
						<td><input type="checkbox" name="miercoles[]" value="4:00"></td>
						<td><input type="checkbox" name="jueves[]" value="4:00"></td>
						<td><input type="checkbox" name="viernes[]" value="4:00"></td>
						<td><input type="checkbox" name="sabado[]" value="4:00"></td>
						<td><input type="checkbox" name="domingo[]" value="4:00"></td>
					</tr>
					<tr>
						<td>5:00 - 5:59</td>
						<td> <input type="checkbox" name="lunes[]" value="5:00"></td>
						<td><input type="checkbox" name="martes[]" value="5:00"></td>
						<td><input type="checkbox" name="miercoles[]" value="5:00"></td>
						<td><input type="checkbox" name="jueves[]" value="5:00"></td>
						<td><input type="checkbox" name="viernes[]" value="5:00"></td>
						<td><input type="checkbox" name="sabado[]" value="5:00"></td>
						<td><input type="checkbox" name="domingo[]" value="5:00"></td>
					</tr>
					<tr>
						<td>6:00 - 6:59</td>
						<td> <input type="checkbox" name="lunes[]" value="6:00"></td>
						<td><input type="checkbox" name="martes[]" value="6:00"></td>
						<td><input type="checkbox" name="miercoles[]" value="6:00"></td>
						<td><input type="checkbox" name="jueves[]" value="6:00"></td>
						<td><input type="checkbox" name="viernes[]" value="6:00"></td>
						<td><input type="checkbox" name="sabado[]" value="6:00"></td>
						<td><input type="checkbox" name="domingo[]" value="6:00"></td>
					</tr>
					<tr>
						<td>7:00 - 7:59</td>
						<td> <input type="checkbox" name="lunes[]" value="7:00"></td>
						<td><input type="checkbox" name="martes[]" value="7:00"></td>
						<td><input type="checkbox" name="miercoles[]" value="7:00"></td>
						<td><input type="checkbox" name="jueves[]" value="7:00"></td>
						<td><input type="checkbox" name="viernes[]" value="7:00"></td>
						<td><input type="checkbox" name="sabado[]" value="7:00"></td>
						<td><input type="checkbox" name="domingo[]" value="7:00"></td>
					</tr>
					<tr>
						<td>8:00 - 8:59</td>
						<td> <input type="checkbox" name="lunes[]" value="8:00"></td>
						<td><input type="checkbox" name="martes[]" value="8:00"></td>
						<td><input type="checkbox" name="miercoles[]" value="8:00"></td>
						<td><input type="checkbox" name="jueves[]" value="8:00"></td>
						<td><input type="checkbox" name="viernes[]" value="8:00"></td>
						<td><input type="checkbox" name="sabado[]" value="8:00"></td>
						<td><input type="checkbox" name="domingo[]" value="8:00"></td>
					</tr>
					<tr>
						<td>9:00 - 9:59</td>
						<td> <input type="checkbox" name="lunes[]" value="9:00"></td>
						<td><input type="checkbox" name="martes[]" value="9:00"></td>
						<td><input type="checkbox" name="miercoles[]" value="9:00"></td>
						<td><input type="checkbox" name="jueves[]" value="9:00"></td>
						<td><input type="checkbox" name="viernes[]" value="9:00"></td>
						<td><input type="checkbox" name="sabado[]" value="9:00"></td>
						<td><input type="checkbox" name="domingo[]" value="9:00"></td>
					</tr>
					<tr>
						<td>10:00 - 10:59</td>
						<td> <input type="checkbox" name="lunes[]" value="10:00"></td>
						<td><input type="checkbox" name="martes[]" value="10:00"></td>
						<td><input type="checkbox" name="miercoles[]" value="10:00"></td>
						<td><input type="checkbox" name="jueves[]" value="10:00"></td>
						<td><input type="checkbox" name="viernes[]" value="10:00"></td>
						<td><input type="checkbox" name="sabado[]" value="10:00"></td>
						<td><input type="checkbox" name="domingo[]" value="10:00"></td>
					</tr>
					<tr>
						<td>11:00 - 11:59</td>
						<td> <input type="checkbox" name="lunes[]" value="11:00"></td>
						<td><input type="checkbox" name="martes[]" value="11:00"></td>
						<td><input type="checkbox" name="miercoles[]" value="11:00"></td>
						<td><input type="checkbox" name="jueves[]" value="11:00"></td>
						<td><input type="checkbox" name="viernes[]" value="11:00"></td>
						<td><input type="checkbox" name="sabado[]" value="11:00"></td>
						<td><input type="checkbox" name="domingo[]" value="11:00"></td>
					</tr>
					<tr>
						<td>12:00 - 12:59</td>
						<td> <input type="checkbox" name="lunes[]" value="12:00"></td>
						<td><input type="checkbox" name="martes[]" value="12:00"></td>
						<td><input type="checkbox" name="miercoles[]" value="12:00"></td>
						<td><input type="checkbox" name="jueves[]" value="12:00"></td>
						<td><input type="checkbox" name="viernes[]" value="12:00"></td>
						<td><input type="checkbox" name="sabado[]" value="12:00"></td>
						<td><input type="checkbox" name="domingo[]" value="12:00"></td>
					</tr>
					<tr>
						<td>13:00 - 13:59</td>
						<td> <input type="checkbox" name="lunes[]" value="13:00"></td>
						<td><input type="checkbox" name="martes[]" value="13:00"></td>
						<td><input type="checkbox" name="miercoles[]" value="13:00"></td>
						<td><input type="checkbox" name="jueves[]" value="13:00"></td>
						<td><input type="checkbox" name="viernes[]" value="13:00"></td>
						<td><input type="checkbox" name="sabado[]" value="13:00"></td>
						<td><input type="checkbox" name="domingo[]" value="13:00"></td>
					</tr>
					<tr>
						<td>14:00 - 14:59</td>
						<td> <input type="checkbox" name="lunes[]" value="14:00"></td>
						<td><input type="checkbox" name="martes[]" value="14:00"></td>
						<td><input type="checkbox" name="miercoles[]" value="14:00"></td>
						<td><input type="checkbox" name="jueves[]" value="14:00"></td>
						<td><input type="checkbox" name="viernes[]" value="14:00"></td>
						<td><input type="checkbox" name="sabado[]" value="14:00"></td>
						<td><input type="checkbox" name="domingo[]" value="14:00"></td>
					</tr>
					<tr>
						<td>15:00 - 15:59</td>
						<td> <input type="checkbox" name="lunes[]" value="15:00"></td>
						<td><input type="checkbox" name="martes[]" value="15:00"></td>
						<td><input type="checkbox" name="miercoles[]" value="15:00"></td>
						<td><input type="checkbox" name="jueves[]" value="15:00"></td>
						<td><input type="checkbox" name="viernes[]" value="15:00"></td>
						<td><input type="checkbox" name="sabado[]" value="15:00"></td>
						<td><input type="checkbox" name="domingo[]" value="15:00"></td>
					</tr>
					<tr>
						<td>16:00 - 16:59</td>
						<td> <input type="checkbox" name="lunes[]" value="16:00"></td>
						<td><input type="checkbox" name="martes[]" value="16:00"></td>
						<td><input type="checkbox" name="miercoles[]" value="16:00"></td>
						<td><input type="checkbox" name="jueves[]" value="16:00"></td>
						<td><input type="checkbox" name="viernes[]" value="16:00"></td>
						<td><input type="checkbox" name="sabado[]" value="16:00"></td>
						<td><input type="checkbox" name="domingo[]" value="16:00"></td>
					</tr>
					<tr>
						<td>17:00 - 17:59</td>
						<td> <input type="checkbox" name="lunes[]" value="17:00"></td>
						<td><input type="checkbox" name="martes[]" value="17:00"></td>
						<td><input type="checkbox" name="miercoles[]" value="17:00"></td>
						<td><input type="checkbox" name="jueves[]" value="17:00"></td>
						<td><input type="checkbox" name="viernes[]" value="17:00"></td>
						<td><input type="checkbox" name="sabado[]" value="17:00"></td>
						<td><input type="checkbox" name="domingo[]" value="17:00"></td>
					</tr>
					<tr>
						<td>18:00 - 18:59</td>
						<td> <input type="checkbox" name="lunes[]" value="18:00"></td>
						<td><input type="checkbox" name="martes[]" value="18:00"></td>
						<td><input type="checkbox" name="miercoles[]" value="18:00"></td>
						<td><input type="checkbox" name="jueves[]" value="18:00"></td>
						<td><input type="checkbox" name="viernes[]" value="18:00"></td>
						<td><input type="checkbox" name="sabado[]" value="18:00"></td>
						<td><input type="checkbox" name="domingo[]" value="18:00"></td>
					</tr>
					<tr>
						<td>19:00 - 19:59</td>
						<td> <input type="checkbox" name="lunes[]" value="19:00"></td>
						<td><input type="checkbox" name="martes[]" value="19:00"></td>
						<td><input type="checkbox" name="miercoles[]" value="19:00"></td>
						<td><input type="checkbox" name="jueves[]" value="19:00"></td>
						<td><input type="checkbox" name="viernes[]" value="19:00"></td>
						<td><input type="checkbox" name="sabado[]" value="19:00"></td>
						<td><input type="checkbox" name="domingo[]" value="19:00"></td>
					</tr>
					<tr>
						<td>20:00 - 20:59</td>
						<td> <input type="checkbox" name="lunes[]" value="20:00"></td>
						<td><input type="checkbox" name="martes[]" value="20:00"></td>
						<td><input type="checkbox" name="miercoles[]" value="20:00"></td>
						<td><input type="checkbox" name="jueves[]" value="20:00"></td>
						<td><input type="checkbox" name="viernes[]" value="20:00"></td>
						<td><input type="checkbox" name="sabado[]" value="20:00"></td>
						<td><input type="checkbox" name="domingo[]" value="20:00"></td>
					</tr>
					<tr>
						<td>21:00 - 21:59</td>
						<td> <input type="checkbox" name="lunes[]" value="21:00"></td>
						<td><input type="checkbox" name="martes[]" value="21:00"></td>
						<td><input type="checkbox" name="miercoles[]" value="21:00"></td>
						<td><input type="checkbox" name="jueves[]" value="21:00"></td>
						<td><input type="checkbox" name="viernes[]" value="21:00"></td>
						<td><input type="checkbox" name="sabado[]" value="21:00"></td>
						<td><input type="checkbox" name="domingo[]" value="21:00"></td>
					</tr>
					<tr>
						<td>22:00 - 22:59</td>
						<td> <input type="checkbox" name="lunes[]" value="22:00"></td>
						<td><input type="checkbox" name="martes[]" value="22:00"></td>
						<td><input type="checkbox" name="miercoles[]" value="22:00"></td>
						<td><input type="checkbox" name="jueves[]" value="22:00"></td>
						<td><input type="checkbox" name="viernes[]" value="22:00"></td>
						<td><input type="checkbox" name="sabado[]" value="22:00"></td>
						<td><input type="checkbox" name="domingo[]" value="22:00"></td>
					</tr>
					<tr>
						<td>23:00 - 23:59</td>
						<td> <input type="checkbox" name="lunes[]" value="23:00"></td>
						<td><input type="checkbox" name="martes[]" value="23:00"></td>
						<td><input type="checkbox" name="miercoles[]" value="23:00"></td>
						<td><input type="checkbox" name="jueves[]" value="23:00"></td>
						<td><input type="checkbox" name="viernes[]" value="23:00"></td>
						<td><input type="checkbox" name="sabado[]" value="23:00"></td>
						<td><input type="checkbox" name="domingo[]" value="23:00"></td>
					</tr>
					</table>	
						
					</div>
					<input type="hidden"  name="ficha" value='<?php echo $ficha?>'/>
					<div>
						<input class="boton" type="submit"></input>					

					</div>
					
				</form>
									

			</section>

		</div>

	</header>
<footer>

2016 + jeandradec@misena.edu.co + manuel.celemin@misena.edu.co


</footer>

</body>
</html>
<?php
if ($_GET['r']=="ok"){
	echo "<script>alert('ok registro')</script>";
}
?>