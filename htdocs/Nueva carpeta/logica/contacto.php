<?php
include 'DataBase.php';
if(isset($_POST['Enviar'])){
    $correo=$_POST['correo'];
    $comentario=$_POST['comentario'];

    $sql="INSERT INTO comentar(correo,comentario) VALUES ('$correo', '$comentario')";
    
    if ($mysqli->query($sql) === TRUE) {

        echo "se ha enviado su correo satisfactoriamente";

    } else {

        echo "Error: " . $sql . "<br>" . $mysqli->error;

    }
}
?>