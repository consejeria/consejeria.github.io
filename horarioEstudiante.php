<!DOCTYPE html>
<html>
	<head>
<link rel="stylesheet" href="css/style.css" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">


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
		</header>
		



<!--<form type=GET>digite su documento <input name='documento'></form>
-->
<hgroup id="grupoTitulos">
	<h2 class="titulo" id="nombreDefinido"></h2>
	<h3 class="titulo" id="correoDefinido"></h3>
	<h3 class="titulo" id="fichaDefinida"></h3>
	<h4 class="titulo" id="nombrePrograma"></h4>
	<h4 class="titulo" id="periodo"></h4>
	<h4 class="titulo" id="fechaCreacion"></h4>
</hgroup>

<div class="padre">
	
	<div class="hijoBoton">
		<input type="button" id="botonImprimir" value="Imprimir Horario" ></input>

	</div>
	<div class="hijoFrase">
		<h4>El computador es el salon de clases y me comprometo a ingresar en este horario.</h4>
	</div>
	
	
<?php
if ($_GET['documento']){
    $doc=$_GET['documento'];
    
    $link = mysql_connect('localhost', 'jorgeeandradec', '')
    or die('No se pudo conectar: ' . mysql_error());
mysql_select_db('consejeria') or die('No se pudo seleccionar la base de datos');

$query = "SELECT * FROM horarios left join instructores ON instructores.ficha = horarios.ficha WHERE documento='$doc' order by dia";
$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());


if ($row=mysql_fetch_array($result)){
    $lunes="[";
    $martes="[";
    $miercoles="[";
    $jueves="[";
    $viernes="[";
    $sabado="[";
    $domingo="[";
    
    /*echo "<table id='tablaConsulta'><tr><th>Documento</th><th>ID FICHA</th><th>Dia</th><th>Hora</th>";*/
    
    
    do {
    
    /*echo "<tr><td>".$row['documento']."</td><td>".$row['ficha']."</td>  <td>".$row['dia']."</td><td>".$row['hora']."</td>  ";*/
    
    if ($row['dia']=="Lunes"){
        $lunes.='"'.substr($row['hora'],0,-3).'",';
    }
     if ($row['dia']=="Martes"){
        $martes.='"'.substr($row['hora'],0,-3).'",';
    }
    if ($row['dia']=="Miercoles"){
        $miercoles.='"'.substr($row['hora'],0,-3).'",';
    }
    if ($row['dia']=="Jueves"){
        $jueves.='"'.substr($row['hora'],0,-3).'",';
    }
    if ($row['dia']=="Viernes"){
        $viernes.='"'.substr($row['hora'],0,-3).'",';
    }
    if ($row['dia']=="Sabado"){
        $sabado.='"'.substr($row['hora'],0,-3).'",';
    }
    if ($row['dia']=="Domingo"){
        $domingo.='"'.substr($row['hora'],0,-3).'",';
    }
    
    
    	
    	$nombres = $row['nombres'];
    	$apellidos = $row['apellidos'];
    	$email = $row['email'];
    	$ficha = $row['ficha'];
    	$nombrePrograma = $row['programa'];
    	$fechaInicio = $row['fechaInicio'];
    	$fechaFin = $row['fechaFin'];
    	$fechaCreacion = $row['fechaRegistro'];
    	
    	
    }while ($row=mysql_fetch_array($result));
    $lunes.="]";
    $martes.="]";
    $miercoles.="]";
    $jueves.="]";
    $viernes.="]";
    $sabado.="]";
    $domingo.="]";
    
    
    
    
    
}

}
?>

		
	
<script>
    var b;

var nombres = "<?php echo $nombres?>";
var apellidos = "<?php echo $apellidos?>";
var email = "<?php echo $email?>";
var ficha = "<?php echo $ficha?>";
var nombrePrograma = "<?php echo $nombrePrograma?>";
var fechaInicio = "<?php echo $fechaInicio?>"
var fechaFin = "<?php echo $fechaFin?>"
var fechaCreacion = "<?php echo $fechaCreacion?>";


var dias = ["Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado", "Domingo"];

var horas = ["00:00", "01:00", "02:00", "03:00", "04:00", "05:00", "06:00", "07:00", "08:00", "09:00",
 "10:00", "11:00", "12:00", "13:00", "14:00", "15:00", "16:00", "17:00", "18:00", "19:00",
 "20:00", "21:00", "22:00", "23:00"];

var Lunes = <?php echo $lunes?>;
var Martes = <?php echo $martes?>;
var Miercoles = <?php echo $miercoles?>;
var Jueves = <?php echo $jueves?>;
var Viernes = <?php echo $viernes?>;
var Sabado = <?php echo $sabado?>;
var Domingo = <?php echo $domingo?>;


// alert("Largo de horas: "+horas.length);

function iniciar(){


dibujarHorario();
escribirDatos();



b = document.getElementById("botonImprimir");
b.addEventListener("click", function(){window.print();});


}

function dibujarHorario(){




document.write("<table id='tablaDibujo'>");

document.write("<tr><th>Hora</th><th>Lunes</th><th>Martes</th><th>Mi&eacutercoles</th>"+
	"<th>Jueves</th><th>Viernes</th><th>S&aacutebado</th><th>Domingo</th></tr>");

for (var i = 0; i < horas.length; i++) {
	document.write("<tr><td>"+horas[i]+"</td>");
	for (var j = 0; j < dias.length; j++) {
		document.write("<td ");				
		//Validar día 1 Lunes
		for(var d1=0; d1 < Lunes.length; d1 ++){
			if (Lunes[d1] == horas[i] && "Lunes" == dias[j] ) {
				document.write("class='resaltado'> SENA");				
			}else{
				document.write("");				
			}
		}
		//Validar día 2 Martes
		for(var d2=0; d2 < Martes.length; d2 ++){
			if (Martes[d2] == horas[i] && "Martes" == dias[j] ) {
				document.write("class='resaltado'>  SENA");				
			}else{
				document.write("");				
			}
		}
		//Validar día 3 Miércoles

		for(var d3=0; d3 < Miercoles.length; d3 ++){
			if (Miercoles[d3] == horas[i] && "Miercoles" == dias[j] ) {
				document.write("class='resaltado'>  SENA");				
			}else{
				document.write("");				
			}
		}
		//Validar día 4 Jueves
		for(var d4=0; d4 < Jueves.length; d4 ++){
			if (Jueves[d4] == horas[i] && "Jueves" == dias[j] ) {
				document.write("class='resaltado'>  SENA");				
			}else{
				document.write("");				
			}
		}
        //Validar día 5 Viernes
		for(var d5=0; d5 < Viernes.length; d5 ++){
			if (Viernes[d5] == horas[i] && "Viernes" == dias[j] ) {
				document.write("class='resaltado'>  SENA");				
			}else{
				document.write("");				
			}
		}
        //Validar día 6 Sabado
		for(var d6=0; d6 < Sabado.length; d6 ++){
			if (Sabado[d6] == horas[i] && "Sabado" == dias[j] ) {
				document.write("class='resaltado'>  SENA");				
			}else{
				document.write("");				
			}
		}
		//Validar día 7 Domingo
		for(var d7=0; d7 < Domingo.length; d7 ++){
			if (Domingo[d7] == horas[i] && "Domingo" == dias[j] ) {
				document.write("class='resaltado'>  SENA");				
			}else{
				document.write("");				
			}
		}

		document.write("</td>");				
		
	}
	document.write("</tr>");
}

document.write("</table>");

}
function escribirDatos(){
	document.getElementById("nombreDefinido").innerHTML = "Horario Semanal de "+nombres+" "+apellidos;
	document.getElementById("correoDefinido").innerHTML = "Correo Electr&oacutenico: "+email;
	document.getElementById("fichaDefinida").innerHTML = "Correspondiente a la ficha: " + ficha;
	document.getElementById("nombrePrograma").innerHTML = "Programa de Formaci&oacuten: "+nombrePrograma;
	document.getElementById("periodo").innerHTML = "Con fecha de Inicio: "+fechaInicio+" y fecha de Cierre: "+fechaFin;
	document.getElementById("fechaCreacion").innerHTML = "Fecha de creaci&oacuten del Horario: " + fechaCreacion;
}

</script>

<div class="hijo">
<script type="text/javascript">
	iniciar();
</script>
</div>
</div>

<footer>
	2016 + Soporte: jeandradec@misena.edu.co + manuel.celemin@misena.edu.co
</footer>
	</body>
	
</html>
