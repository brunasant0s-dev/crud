<!-- Bruna Cecilia e Emilly Vilela de Souza -->
<?php
    $hostname = 'localhost';
    $bancodedados = 'banco3_crud';
    $usuario = 'root';
    $senha = '';

    $mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);
    if($mysqli->connect_error){
        die("Erro ao conectar: ".$mysqli->connect_error);
    }
?>