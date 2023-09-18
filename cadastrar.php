<!-- Bruna Cecilia e Emilly Vilela de Souza -->
<?php
include 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $n_prod = [
        $_POST['nomePaciente'],
        $_POST['cpfPaciente'],
        $_POST['convenioPaciente'],
    ];

    $mysqli->query("INSERT INTO produtos (id_paciente, nome_paciente, cpf_paciente, convenio_paciente) VALUES ('$n_prod[0]',  '$n_prod[1]', '$n_prod[2]', '$n_prod[3]')");
}

header('Location: index.php');
exit; // Redireciona de volta para a página de cadastro
?>