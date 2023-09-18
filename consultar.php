<!-- Bruna Cecilia e Emilly Vilela de Souza -->
<?php
    include 'conexao.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="content">
        <h1>Lista de Produtos</h1>
        <table border="1">
            <tr>
                <th>Nome do Produto</th>
                <th>Categoria</th>
                <th>Quantidade</th>
                <th>Preço</th>
            </tr>
            <?php
                $sql = "SELECT * FROM produtos";
                $sql_exec = $mysqli->query($sql) or die($mysqli->error);
                while ($produto = $sql_exec->fetch_assoc()){
                    echo "<tr>
                            <td>".$produto['nome_prod']."</td>
                            <td>".$produto['cat_prod']."</td>
                            <td>".$produto['quant_prod']."</td>
                            <td>R$".$produto['valor_prod']."</td>
                        </tr>";
                }
            ?>
        </table>
    </div>
</body>
</html>