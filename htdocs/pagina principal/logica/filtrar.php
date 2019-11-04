<?php
include 'DataBase.php';
$StringConsulta="select * from vivienda";
if(!isset($_POST['filtrar'])){
 
    if(isset($_POST['Casa']) AND isset($_POST['Apartamento']) AND isset($_POST['Obra_negra']))
    {
    $StringConsulta=$StringConsulta." WHERE tipo='Casa' or tipo='Apartamento' OR tipo='Obra_negra'";  
    } 
    else if(isset($_POST['Casa']) AND isset($_POST['Apartamento']))
    {
      $StringConsulta=$StringConsulta." WHERE tipo='Casa' or tipo='Apartamento'";  
    }
    else if(isset($_POST['Casa']) AND isset($_POST['Obra_negra']))
    {
      $StringConsulta=$StringConsulta." WHERE tipo='Casa' or tipo='Obra_negra'";  
    }
    else if(isset($_POST['Obra_negra']) AND isset($_POST['Apartamento']))
    {
      $StringConsulta=$StringConsulta." WHERE tipo='Obra_negra' or tipo='Apartamento'";  
    }
    else if(isset($_POST['Casa']))
    {
      $StringConsulta=$StringConsulta." WHERE tipo='Casa'";
    }
    else if(isset($_POST['Apartamento']))
    {
      $StringConsulta=$StringConsulta." WHERE tipo='Apartamento'";
    }
    else if(isset($_POST['Obra_negra']))
    {
      $StringConsulta=$StringConsulta." WHERE tipo='Obra_negra'";
    }
?>
<html>
    <head>
  </head>
  <body>

  <center>
    <br><br>  
  <table border=0>
    <?php
    }
$consultaDB=$mysqli->query($StringConsulta);
$tabla="";
while($ColumnasDB = $consultaDB->fetch_array(MYSQLI_ASSOC))
{
	$tabla=$tabla.'<tr><td><h1>'.$ColumnasDB['ubicacion'].'<h1></td></tr><tr><td><img src="../imagenes/'.$ColumnasDB['foto'].'"  width=300px height=300px></td></tr><tr><td>'.$ColumnasDB['tipo'].'</td></tr><tr><td>Telefono: '.$ColumnasDB['telefono'].'</td></tr>';
}
echo $tabla;
?>

</table>
</center>
</body>
</html>
<?php
?>