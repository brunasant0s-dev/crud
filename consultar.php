<!-- Bruna Cecilia e Emilly Vilela de Souza -->
<?php
include 'conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Document</title>
</head>

<body>
    <div class="content">
        <h1>Pacientes</h1>
        <table border="1">
            <tr>
                <th>Nome</th>
                <th>CPF</th>
                <th>Convênio</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>
            <?php
            $sql = "SELECT * FROM paciente";
            $sql_exec = $mysqli->query($sql) or die($mysqli->error);
            while ($paciente = $sql_exec->fetch_assoc()) {
                echo "<tr>
                            <td>" . $paciente['nome_paciente'] . "</td>
                            <td>" . $paciente['cpf_paciente'] . "</td>
                            <td>" . $paciente['convenio_paciente'] . "</td>
                            <td><a href='editar.php?id=" . $paciente['id_paciente'] . "'>Editar</a></td>
                            <td><a href='excluir.php?id=" . $paciente['id_paciente'] . "'>Excluir</a></td>
                        </tr>";
            }
            ?>
        </table>
    </div>
</body>

</html>
