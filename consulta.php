<link rel="stylesheet" href="css/style.css" type="text/css" />

<form type=GET>digite su ficha <input name='ficha'></form>
<?php
if ($_GET['ficha']){
    $ficha=$_GET['ficha'];
    
    $link = mysql_connect('localhost', 'jorgeeandradec', '')
    or die('No se pudo conectar: ' . mysql_error());
mysql_select_db('consejeria') or die('No se pudo seleccionar la base de datos');

    $query = "SELECT * FROM estadisticas2 WHERE ficha='$ficha'";
$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());

if ($row=mysql_fetch_array($result)){
    
    echo "<table id='tablaConsulta'><tr><th>ID FICHA</th><th>Dia</th><th>Hora</th><th>Cantidad</th>";
    do {
    echo "<tr><td>".$row['ficha']."</td>  <td>".$row['dia']."</td><td>".$row['hora']."</td> <td>".$row['cantidad']."</td> ";
        
    }while ($row=mysql_fetch_array($result));
    
}

}
?>

