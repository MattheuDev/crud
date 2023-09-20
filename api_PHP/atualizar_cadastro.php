<?php
    //Incluir o arquivo de conexão com o banco de dados
    include "database.php";

    //resgatar as informações do formulario enviadas via POST
    $id_produto = $_POST['id_produto'];
    $nome_produto = $_POST['nome_produto'];
    $descricao_produto = $_POST['descricao_produto'];
    $quantidade_produto = $_POST['quantidade_produto'];
    $fornecedor_produto = $_POST['fornecedor_produto'];

    //Criar a string com o comando em SQL 
    $sql_update = "UPDATE sup_produtos
     SET nome_produto = '$nome_produto' ,descricao_produto = '$descricao_produto', quantidade_produto = '$quantidade_produto', fornecedor_produto = '$fornecedor_produto'
     WHERE sup_produtos.id_produto = '$id_produto'";

    //conectar ao banco de dados e executar o comando em sql
    //a funcao mysql_query necessita de dois parametros para seu funcionamento
    //a variavel com a conexao ao banco de dados e a string com os comandos em sql
    if(mysqli_query($conexao,$sql_update)){
        header("location: listar_produtos.php");
    
    } else{
        echo "Falha ao realizar o cadastro";
    }