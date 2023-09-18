<?php
include 'conexao.php'; // Inclua o arquivo de conexão ao banco de dados

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Execute a consulta SQL para excluir o paciente com base no ID
    $sql = "DELETE FROM paciente WHERE id = $id";
    
    if ($mysqli->query($sql)) {
        echo "Paciente excluído com sucesso.";
    } else {
        echo "Erro ao excluir o paciente: " . $mysqli->error;
    }
} else {
    echo "ID do paciente não especificado.";
}
?>

<p><a href="index.php">Voltar para a lista de pacientes</a></p>
