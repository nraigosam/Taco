<?php
include 'DataBase.php';
$StringConsulta="select * from vivienda";
if(!isset($_POST['filtrar'])){
 
    if(isset($_POST['Casa']) AND isset($_POST['Apartamento']) AND isset($_POST['Obra_negra']))
    {
    $StringConsulta=$StringConsulta." WHERE ubicacion='Casa' or ubicacion='Apartamento' OR ubicacion='Obra_negra'";  
    } 
    else if(isset($_POST['Casa']) AND isset($_POST['Apartamento']))
    {
      $StringConsulta=$StringConsulta." WHERE ubicacion='Casa' or ubicacion='Apartamento'";  
    }
    else if(isset($_POST['Casa']) AND isset($_POST['Obra_negra']))
    {
      $StringConsulta=$StringConsulta." WHERE ubicacion='Casa' or ubicacion='Obra_negra'";  
    }
    else if(isset($_POST['Obra_negra']) AND isset($_POST['Apartamento']))
    {
      $StringConsulta=$StringConsulta." WHERE ubicacion='Obra_negra' or ubicacion='Apartamento'";  
    }
    else if(isset($_POST['Casa']))
    {
      $StringConsulta=$StringConsulta." WHERE ubicacion='Casa'";
    }
    else if(isset($_POST['Apartamento']))
    {
      $StringConsulta=$StringConsulta." WHERE ubicacion='Apartamento'";
    }
    else if(isset($_POST['Obra_negra']))
    {
      $StringConsulta=$StringConsulta." WHERE ubicacion='Obra_negra'";
    }
?>
<html>
    <head>
  </head>
  <body>
  <center>  
  <table border=0>
    <?php
    }
$consultaDB=$mysqli->query($StringConsulta);
$tabla="";
while($ColumnasDB = $consultaDB->fetch_array(MYSQLI_ASSOC))
{
	$tabla=$tabla.'<tr><td><h1>'.$ColumnasDB['tipo'].'<h1></td></tr><tr><td><img src="'.$ColumnasDB['foto'].'"  width=600px height=600px></td></tr><tr><td>'.$ColumnasDB['ubicacion'].'</td></tr><tr><td>'.$ColumnasDB['precio'].'</td></tr>';
}
echo $tabla;
?>

</table>
</center>
</body>
</html>
<?php
?>