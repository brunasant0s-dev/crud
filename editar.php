<?php
//Vitória 
include 'conexao.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Verifique se o formulário foi enviado
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Obtenha os dados do formulário
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $convenio = $_POST['convenio'];

        // Atualize os dados do paciente no banco de dados
        $sql = "UPDATE paciente SET nome_paciente = '$nome', cpf_paciente = '$cpf', convenio_paciente = '$convenio' WHERE id_paciente = $id";
        if ($mysqli->query($sql)) {
            echo "Dados do paciente atualizados com sucesso!";
        } else {
            echo "Erro ao atualizar os dados do paciente: " . $mysqli->error;
        }
    }

    // Recupere os dados do paciente para exibir no formulário de edição
    $sql = "SELECT * FROM paciente WHERE id_paciente = $id";
    $result = $mysqli->query($sql);
    if ($result->num_rows > 0) {
        $paciente = $result->fetch_assoc();
    } else {
        echo "Paciente não encontrado";
    }
} else {
    echo "ID do paciente não especificado.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Editar Paciente</title>
</head>
<body>
    <div class="content">
        <h1>Editar Paciente</h1>
        <form method="POST">
            <label for="nome">Nome do Paciente:</label>
            <input type="text" name="nome" id="nome" value="<?php echo $paciente['nome_paciente']; ?>" required><br>

            <label for="cpf">CPF:</label>
            <input type="text" name="cpf" id="cpf" value="<?php echo $paciente['cpf_paciente']; ?>" required><br>

            <label for="convenio">Convênio:</label>
            <select name="convenio" id="convenio" required>
                <option value="Particular" <?php if ($paciente['convenio_paciente'] == 'Particular') echo 'selected'; ?>>Particular</option>
                <option value="Público" <?php if ($paciente['convenio_paciente'] == 'Público') echo 'selected'; ?>>Público</option>
            </select><br>

            <input type="submit" value="Salvar">
        </form>
        <br>
        <a href="lista_pacientes.php">Voltar para a Lista de Pacientes</a> <br>
        <a href="index.php">Voltar para o login</a>
    </div>
    </div>
</body>
</html>