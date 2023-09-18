<!-- Bruna Cecilia e Emilly Vilela de Souza -->
<?php
    $hostname = 'localhost';
    $user = 'root';
    $senha = '';
    $server = 'banco3_crud';

    $mysqli = new mysqli($hostname, $user, $senha, $server);
    if ($mysqli->error){
        die ('Erro de conexão: '.$mysqli->error);
    }
?>