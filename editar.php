<?php
include 'conexao.php'; // Inclua o arquivo de conexão ao banco de dados

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Recupere os dados do paciente com base no ID
    $sql = "SELECT * FROM paciente WHERE id = $id";
    $result = $mysqli->query($sql);

    if ($result) {
        if ($result->num_rows > 0) {
            $paciente = $result->fetch_assoc();
        } else {
            echo "Paciente não encontrado.";
            exit;
        }
    } else {
        echo "Erro ao buscar paciente: " . $mysqli->error;
        exit;
    }
} else {
    echo "ID do paciente não especificado.";
    exit;
}

// Processo de edição do paciente aqui
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nomeNovo = $_POST['nome'];
    $cpfNovo = $_POST['cpf'];
    $convenioNovo = $_POST['convenio'];

    // Execute a consulta SQL para atualizar os dados do paciente
    $sql = "UPDATE paciente SET nome_paciente = '$nomeNovo', cpf_paciente = '$cpfNovo', convenio_paciente = '$convenioNovo' WHERE id = $id";

    if ($mysqli->query($sql)) {
        echo "Paciente atualizado com sucesso.";
    } else {
        echo "Erro ao atualizar o paciente: " . $mysqli->error;
    }
}
?>
