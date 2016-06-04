<!DOCTYPE html>
<html>
    <head>
        <title>registro enlace</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
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
    
    

<?php 
$base_url='https://consejeria-jorgeeandradec.c9users.io/';

$documentoInstructor=$_POST['documentoInstructor'];
$nombreInstructor=utf8_decode($_POST['nombreInstructor']);
$ficha=$_POST['idFicha'];
$programa=utf8_decode($_POST['programa']);
$fechaInicio=$_POST['fechaInicio'];
$fechaFin=$_POST['fechaFin'];

//conexion base de datos
$link = mysql_connect('localhost', 'jorgeeandradec', '')
    or die('No se pudo conectar: ' . mysql_error());
//print_r($_POST);
mysql_select_db('consejeria') or die('No se pudo seleccionar la base de datos');

$query = "DELETE FROM instructores WHERE ficha='$ficha'";
$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());

if ($_POST){

$query = "INSERT INTO instructores(documentoInstructor, nombreInstructor, ficha, programa, fechaInicio, fechaFin) 
VALUES ('$documentoInstructor','$nombreInstructor','$ficha','$programa','$fechaInicio','$fechaFin')";
$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
}


echo "<p>El link generado para el Aprendiz es: <a href='".$base_url."registrarHorario.php?ficha=".$ficha."'>".$base_url."registrarHorario.php?ficha=".$ficha." </a>";
?>

<footer>
        	2016 + Soporte: jeandradec@misena.edu.co + manuel.celemin@misena.edu.co
    </footer>
        
    </body>
</html>