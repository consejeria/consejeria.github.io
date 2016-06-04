<!DOCTYPE html>
<html>
	<head>
<link rel="stylesheet" href="css/style.css" type="text/css" />
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
		
		
		<hgroup id="grupoTitulos">
		<h2 class="titulo" id="nombrePrograma"></h2>
		<h3 class="titulo" id="ficha"></h3>
		<h3 class="titulo" id="cantidadAprendices"></h3>
		</hgroup>
		
		
		
		
<?php
if ($_GET['ficha']){
    $ficha=$_GET['ficha'];
    
    $link = mysql_connect('localhost', 'jorgeeandradec', '')
    or die('No se pudo conectar: ' . mysql_error());

    mysql_select_db('consejeria') or die('No se pudo seleccionar la base de datos');

    $query = "SELECT * FROM horarios WHERE ficha='$ficha'";
    $result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
    
    $query2 = "SELECT DISTINCT documento FROM horarios WHERE ficha='$ficha'";
    $result2 = mysql_query($query2) or die('Consulta Fallida para contar Aprendices de la ficha: '. mysql_error());
    
    $query3 = "SELECT * FROM instructores WHERE ficha = '$ficha'";
    $result3 = mysql_query($query3) or die('Consulta Fallida en tabla Instructores: '.mysql_error());
    
    if($row2=mysql_fetch_array($result2)){
    	$contarAlumnos = 0;
    	do{
    		$contarAlumnos = $contarAlumnos + 1;
    		
    	}while($row2=mysql_fetch_array($result2));
    	
    }
    
    if($row3=mysql_fetch_array($result3)){
    	do{
    		$nombrePrograma = $row3['programa'];
    	}while($row3=mysql_fetch_array($result3));
    	
    }



if ($row=mysql_fetch_array($result)){
    $lunes = "[";
    $martes = "[";
    $miercoles = "[";
    $jueves = "[";
    $viernes = "[";
    $sabado = "[";
    $domingo = "[";
    
    
    
    
    /*echo "<table id='tablaConsulta'><tr><th>ID FICHA</th><th>Dia</th><th>Hora</th>";*/
    
    
    do {
    
    /*echo "<tr><td>".$row['ficha']."</td>  <td>".$row['dia']."</td><td>".$row['hora']."</td>";*/
    
    
    if ($row['dia']=="Lunes") {
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
    
    
    
    
    }while ($row=mysql_fetch_array($result));
    
    $lunes.="]";
    $martes.="]";
    $miercoles.="]";
    $jueves.="]";
    $viernes.="]";
    $sabado.="]";
    $domingo.="]";
    
    
    
    
}else{
	echo "<h1>No se encontraron registros</h1>";
}

}
?>

<script type="text/javascript">

//Variables para escribir en página
var ficha = "<?php echo $ficha?>";
var nombrePrograma = "<?php echo $nombrePrograma?>";
var contarAlumnos = "<?php echo $contarAlumnos?>";


//boton
var b;

//Definición de arreglos (Contenido de días estaticos y horas por día)

var arregloHorasLunes = new Array(24);
var arregloHorasMartes = new Array(24);
var arregloHorasMiercoles = new Array(24);
var arregloHorasJueves = new Array(24);
var arregloHorasViernes = new Array(24);
var arregloHorasSabado = new Array(24);
var arregloHorasDomingo = new Array(24);


//Asignación de valores de arreglos (Contenido de horas estaticas y horas por día)
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


function iniciar(){


dibujarHorario();
escribirDatos();

b = document.getElementById("botonImprimir");
b.addEventListener("click", function(){window.print();});

}

function dibujarHorario(){

for(i=0; i < arregloHorasLunes.length; i++) {
	arregloHorasLunes[i]=0;
	arregloHorasMartes[i]=0;
	arregloHorasMiercoles[i]=0;
	arregloHorasJueves[i]=0;
	arregloHorasViernes[i]=0;
	arregloHorasSabado[i]=0;
	arregloHorasDomingo[i]=0;
}


//Recorrer lo que trae Lunes de la consulta y compararlo con cada hora
//para acumular cantidades en el arregloHorasLunes
for(var i=0; i < Lunes.length; i++){
	for(var j=0; j < horas.length; j++){
		if (horas[j]==Lunes[i]) {			
			arregloHorasLunes[j]=arregloHorasLunes[j]+1;			
		}		
	}
}

for(var i=0; i < Martes.length; i++){
	for(var j=0; j < horas.length; j++){
		if (horas[j]==Martes[i]) {			
			arregloHorasMartes[j]=arregloHorasMartes[j]+1;			
		}		
	}
}

for(var i=0; i < Miercoles.length; i++){
	for(var j=0; j < horas.length; j++){
		if (horas[j]==Miercoles[i]) {			
			arregloHorasMiercoles[j]=arregloHorasMiercoles[j]+1;			
		}		
	}
}

for(var i=0; i < Jueves.length; i++){
	for(var j=0; j < horas.length; j++){
		if (horas[j]==Jueves[i]) {			
			arregloHorasJueves[j]=arregloHorasJueves[j]+1;			
		}		
	}
}

for(var i=0; i < Viernes.length; i++){
	for(var j=0; j < horas.length; j++){
		if (horas[j]==Viernes[i]) {			
			arregloHorasViernes[j]=arregloHorasViernes[j]+1;			
		}		
	}
}

for(var i=0; i < Sabado.length; i++){
	for(var j=0; j < horas.length; j++){
		if (horas[j]==Sabado[i]) {			
			arregloHorasSabado[j]=arregloHorasSabado[j]+1;			
		}		
	}
}

for(var i=0; i < Domingo.length; i++){
	for(var j=0; j < horas.length; j++){
		if (horas[j]==Domingo[i]) {			
			arregloHorasDomingo[j]=arregloHorasDomingo[j]+1;			
		}		
	}
}


document.write("<table id='tablaDibujo'>");

document.write("<tr><th>Hora</th><th>Lunes</th><th>Martes</th><th>Mi&eacutercoles</th>"+
	"<th>Jueves</th><th>Viernes</th><th>S&aacutebado</th><th>Domingo</th></tr>");

for (var i = 0; i < horas.length; i++) {
	document.write("<tr><td>"+horas[i]+"</td>");
	for (var j = 0; j < dias.length; j++) {
	document.write("<td");
	//Valindado el día Lunes
	if (dias[j]=="Lunes"){
	 if (arregloHorasLunes[i] > 0){
		document.write(" class='resaltado'>"+arregloHorasLunes[i]);
		}else{
		document.write(">");
		}
	}
	//Valindado el día Martes
	if (dias[j]=="Martes"){
	 if (arregloHorasMartes[i] > 0){
		document.write(" class='resaltado'>"+arregloHorasMartes[i]);
		}else{
		document.write(">");
		}
	}
	//Valindado el día Miércoles
	if (dias[j]=="Miercoles"){
	 if (arregloHorasMiercoles[i] > 0){
		document.write(" class='resaltado'>"+arregloHorasMiercoles[i]);
		}else{
		document.write(">");
		}
	}
	//Valindado el día Jueves
	if (dias[j]=="Jueves"){
	 if (arregloHorasJueves[i] > 0){
		document.write(" class='resaltado'>"+arregloHorasJueves[i]);
		}else{
		document.write(">");
		}
	}
	//Valindado el día Viernes
	if (dias[j]=="Viernes"){
	 if (arregloHorasViernes[i] > 0){
		document.write(" class='resaltado'>"+arregloHorasViernes[i]);
		}else{
		document.write(">");
		}
	}
	//Valindado el día Sábado
	if (dias[j]=="Sabado"){
	 if (arregloHorasSabado[i] > 0){
		document.write(" class='resaltado'>"+arregloHorasSabado[i]);
		}else{
		document.write(">");
		}
	}
	//Valindado el día Domingo
	if (dias[j]=="Domingo"){
	 if (arregloHorasDomingo[i] > 0){
		document.write(" class='resaltado'>"+arregloHorasDomingo[i]);
		}else{
		document.write(">");
		}
	}
	

		document.write("</td>");				
			}
		document.write("</tr>");
		}
document.write("</table>");		
	}


function escribirDatos(){
 	document.getElementById("nombrePrograma").innerHTML = "Horario del prorgama " + nombrePrograma;
 	document.getElementById("ficha").innerHTML = "Correspondiente a la ficha: " + ficha;
 	document.getElementById("cantidadAprendices").innerHTML = "Cantidad de Aprendices registrados: " + contarAlumnos;
 }


</script>
<script type="text/javascript">
	iniciar();
</script>

</body>
	<footer>
		2016 + Soporte: jeandradec@misena.edu.co + manuel.celemin@misena.edu.co
	</footer>
	
</html>