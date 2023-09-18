<!-- Bruna Cecilia e Emilly Vilela de Souza -->
<?php
    include 'conexao.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $n_prod = [
            $_POST['nomeProduto'],
            $_POST['categoriaProduto'],
            $_POST['quantidade'],
            $_POST['valorProduto']
        ];

        $mysqli->query("INSERT INTO produtos (nome_prod, cat_prod, quant_prod, valor_prod) VALUES ('$n_prod[0]',  '$n_prod[1]', '$n_prod[2]', '$n_prod[3]')");
    }

    header('Location: index.php');
    exit; // Redireciona de volta para a página de cadastro
?>