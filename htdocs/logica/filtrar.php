<?php
include 'DataBase.php';
$StringConsulta="select * from vivienda";
if(!isset($_POST['filtrar'])){
 
    if(isset($_POST['Casa']) AND isset($_POST['Apartamento']) AND isset($_POST['Obra_negra']))
    {
    $StringConsulta=$StringConsulta." WHERE ubicacion='Casa' or ubicacion='Apartamento' OR ubicacion='Obra_negra'";  
    } 
?>
<html>
    <head>
  </head>
  <body>
    <table border=>
    <?php
    }
$consultaDB=$mysqli->query($StringConsulta);
$tabla="";
while($ColumnasDB = $consultaDB->fetch_array(MYSQLI_ASSOC))
{
	$tabla=$tabla.'<tr><td>'.$ColumnasDB['nombre'].'</td><td>'.$ColumnasDB['ubicacion'].'</td><td>'.$ColumnasDB['precio'].'</td></tr>';
}
echo $tabla;
?>
</table>
</body>
</html>
<?php
?>