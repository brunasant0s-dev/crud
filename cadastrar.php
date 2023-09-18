<!-- Bruna Cecilia e Emilly Vilela de Souza -->
<?php
    include 'conexao.php';

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $nomePaciente = $_POST['nome'];
        $cpfPaciente = $_POST['cpf'];
        $convenioPaciente = $_POST['convenio'];

        $mysqli->query("INSERT INTO paciente (nome_paciente, cpf_paciente, convenio_paciente) VALUES ('$nomePaciente', '$cpfPaciente', '$convenioPaciente')");
        header("Location: index.php");
        exit();
    }
?>