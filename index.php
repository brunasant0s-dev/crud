<!-- Bruna Cecilia e Emilly Vilela de Souza -->
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Cadastro de Produtos</title>
</head>

<body>
    <div class="content">
        <h1>Cadastro de Produtos</h1>

        <form class="formulario" action="cadastro_produto.php" method="post">
            <label for="nomeProduto">Nome do Produto:</label>
            <input type="text" id="nomeProduto" name="nomeProduto" required><br><br>

            <label for="categoriaProduto">Categoria do Produto:</label>
            <select id="categoriaProduto" name="categoriaProduto" required>
                <option value="eletronico">Eletrônico</option>
                <option value="vestuario">Vestuário</option>
                <option value="alimento">Alimento</option>
            </select><br><br>

            <label for="quantidade">Quantidade:</label>
            <input type="number" id="quantidade" name="quantidade"  required><br><br>

            <label for="valorProduto">Valor do Produto (R$):</label>
            <input type="number" id="valorProduto" name="valorProduto" required><br><br>

            <input class="btn" type="submit" value="Cadastrar"> <br>
            <br>
        </form>
        <button type="button" class="btn-voltar"><a href="listar_produto.php">Listar Produtos</a></button>
    </div>

    <ul>
        <?php
        // Verifica se a lista de produtos existe
        if (isset($_SESSION['produtos'])) {
            foreach ($_SESSION['produtos'] as $produto) {
                echo "<li>{$produto['nome']} - Categoria: {$produto['categoria']} - Quantidade: {$produto['quantidade']} - Valor: R$ {$produto['valor']}</li>";
            }
        }
        ?>
    </ul>

</body>

</html>