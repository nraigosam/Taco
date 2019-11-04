<?php
include 'DataBase.php';
if(isset($_POST['Enviar'])){
    
    $tipo=$_POST['tipo'];
    $foto=$_POST['foto'];
    $telefono=$_POST['telefono'];
    $ubicacion=$_POST['ubicacion'];
    $latitud=$_POST['latitud'];
    $longitud=$_POST['longitud'];

    $sql="INSERT INTO vivienda VALUES ('null','$tipo','$ubicacion','$foto','$telefono','$latitud','$longitud')";
    
    if ($mysqli->query($sql) === TRUE) {

        echo "se ha ingresado una nuevo archivo";

    } else {

        echo "Error: " . $sql . "<br>" . $mysqli->error;

    }
}
?>