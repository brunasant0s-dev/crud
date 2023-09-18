<!-- Bruna Cecilia e Emilly Vilela de Souza -->
<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Paciente</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
    <h1>Cadastro de Paciente</h1>
    <form action="cadastrar.php" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required><br><br>
        
        <label for="cpf">CPF:</label>
        <input type="text" name="cpf" required><br><br>
        
        <label for="convenio">Convênio:</label>
            <select class="btn-select" id="convenio" name="convenio" required>
                <option value="particular">Particular</option>
                <option value="publico">Público</option>
            </select>
            <br><br>
        <input type="submit" value="Cadastrar">
        <a class="listar-button" href="consultar.php">Listar Pacientes</a>
    </form>
    <br>
   
</body>
</html>