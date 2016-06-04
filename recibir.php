

<?php 
//usar utf8_decode para registrar con éxito tildes y eñes

$documento=$_POST['documento'];
$nombres=utf8_decode($_POST['nombres']);
$apellidos=utf8_decode($_POST['apellidos']);
$email=$_POST['email'];
$ficha=$_POST['ficha'];
//conexion base de datos
$link = mysql_connect('localhost', 'jorgeeandradec', '')
    or die('No se pudo conectar: ' . mysql_error());
//print_r($_POST);
mysql_select_db('consejeria') or die('No se pudo seleccionar la base de datos');

/*
Este truco no funciona cuando se registra por segunda vez un aprendiz en una ficha diferente,
porque al consultarlo para graficar causa errores
$query = "DELETE FROM horarios WHERE documento='$documento' AND ficha='$ficha'";
*/
$query = "DELETE FROM horarios WHERE documento='$documento'";

$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());

if ($_POST['lunes']){
foreach ($_POST['lunes'] as $value) {
    $query = "INSERT INTO horarios(documento, nombres, apellidos, email, dia, hora, ficha) VALUES ('$documento','$nombres','$apellidos',
'$email','Lunes','$value','$ficha')";
$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
}
}
if ($_POST['martes']){
foreach ($_POST['martes'] as $value2) {
    $query = "INSERT INTO horarios(documento, nombres, apellidos, email, dia, hora,ficha) VALUES ('$documento','$nombres','$apellidos',
'$email','Martes','$value2','$ficha')";
$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
}
}
if ($_POST['miercoles']){
foreach ($_POST['miercoles'] as $value) {
    $query = "INSERT INTO horarios(documento, nombres, apellidos, email, dia, hora, ficha) VALUES ('$documento','$nombres','$apellidos',
'$email','Miercoles','$value','$ficha')";
$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
}
}
if ($_POST['jueves']){
foreach ($_POST['jueves'] as $value) {
    $query = "INSERT INTO horarios(documento, nombres, apellidos, email, dia, hora, ficha) VALUES ('$documento','$nombres','$apellidos',
'$email','Jueves','$value','$ficha')";
$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
}
}
if ($_POST['viernes']){
foreach ($_POST['viernes'] as $value) {
    $query = "INSERT INTO horarios(documento, nombres, apellidos, email, dia, hora, ficha) VALUES ('$documento','$nombres','$apellidos',
'$email','Viernes','$value','$ficha')";
$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
}
}
if ($_POST['sabado']){
foreach ($_POST['sabado'] as $value) {
    $query = "INSERT INTO horarios(documento, nombres, apellidos, email, dia, hora, ficha) VALUES ('$documento','$nombres','$apellidos',
'$email','Sabado','$value','$ficha')";
$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
}
}
if ($_POST['domingo']){
foreach ($_POST['domingo'] as $value) {
    $query = "INSERT INTO horarios(documento, nombres, apellidos, email, dia, hora, ficha) VALUES ('$documento','$nombres','$apellidos',
'$email','Domingo','$value','$ficha')";
$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
}
}
// Realizar una consulta MySQL


// Liberar resultados


// Cerrar la conexión
mysql_close($link);
//

//insert a la base de datos
header("location:respuestaEstudiante.php?documento=$documento");//

//mostramos resultados


?>