<!-- Bruna Cecilia e Emilly Vilela de Souza -->
<?php
    $hostname = 'localhost';
    $user = 'root';
    $senha = '';
    $server = 'db_aula2';

    $mysqli = new mysqli($hostname, $user, $senha, $server);
    if ($mysqli->error){
        die ('Erro de conexão: '.$mysqli->error);
    }
?>