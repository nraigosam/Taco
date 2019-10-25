<?php
include 'DataBase.php';
if(!isset($_POST['filtrar'])){
  $StringConsulta="select * from vivienda";
    if(isset($_POST['Casa']) AND isset($_POST['Apartamento']) AND isset($_POST['Obra_negra']))
    {
    $StringConsulta=$StringConsulta."ubicacion='Casa' OR ubicacion='Aparatamento' OR ubicacion='Obra_negra'";  
    }
 
    
?>
<html>
    <head>

    <?php
$consultaDB=$mysqli->query($StringConsulta);
$tabla="";
while($ColumnasDB = $consultaDB->fetch_array(MYSQLI_ASSOC))
{
	
	$tabla=$tabla.'<tr><td>'.$ColumnasDB['nombre'].'</td><td>'.$ColumnasDB['ubicacion'].'</td><td>'.$ColumnasDB['precio'].'</td></tr>';
	
	
	
}
echo $tabla;
?>
</head>
</html>
<?php
}


?>




