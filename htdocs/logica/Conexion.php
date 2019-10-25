<?php
include 'DataBase.php';
if(!isset($_POST['filtrar'])){
  $consulta="select * from vivienda";
    if(isset($_POST['Casa']) AND isset($_POST['Apartamento']) AND isset($_POST['Obra_negra']))
    {
    $consulta=$consulta."ubicacion='Casa' OR ubicacion='Aparatamento' OR ubicacion='Obra_negra'";  
    }
 
    
?>
<html>
    <head>

    <?php
$a=$mysqli->query($consulta);
$total="";
while($r = $a->fetch_array(MYSQLI_ASSOC))
{
	
	$total=$total.'<tr><td>'.$r['nombre'].'</td><td>'.$r['ubicacion'].'</td><td>'.$r['precio'].'</td></tr>';
	
	
	
}
echo $total;
?>
</head>
</html>
<?php
}


?>




