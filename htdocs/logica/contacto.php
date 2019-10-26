<?php
include 'DataBase.php';
if(isset($_POST['Enviar'])){
    $correo=$_POST['correo'];
    $comentario=$_POST['comentario'];

    mysqli_query($mysqli, "INSERT INTO comentar(correo,comentario) VALUES ('$correo', '$comentario')");

}
?>