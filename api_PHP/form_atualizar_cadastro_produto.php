<?php
//incluir o arquivo de conexao com o BD
include "database.php";
include "header.php";

//recuperar o ID enviar via link com o GET
$id_produto = $_GET['id_produto'];

//construir a string em SQL
$sql_id = "SELECT * FROM sup_produtos
WHERE sup_produtos.id_produto = '$id_produto'";

//conectar ao banco de dados e executar o comando em SQL
$dados_bd_id = mysqli_query ($conexao, $sql_id);

//converter os resultados da consulta ao BD em um array associativo
$bd_id = mysqli_fetch_array($dados_bd_id);

?>

<div class="container mt-3">
    <h1>API PHP - CRUD - UPDATE</h1>
    <P>Atualizacao de Cadastro de produtos</P>

    <form action="atualizar_cadastro.php" method="post">
        <input type="hidden" name="id_produto" value="<?php echo $bd_id['id_produto'] ?>">


        <div class="mb-3 mt-3">
            <label for="nome_produto">Nome: </label>
            <input type="text" name="nome_produto" id="nome_produto" class="form-control"value="<?php echo $bd_id['nome_produto'] ?>">
        </div>

        <div class="mb-3">
            <label for="descricao_produto">Descrição: </label>
            <input type="text" name="descricao_produto" id="descricao_produto" class="form-control"value="<?php echo $bd_id['descricao_produto'] ?>">
        </div>

        <div class="mb-3">
            <label for="quantidade_produto">Quantidade: </label>
            <input type="number" name="quantidade_produto" id="quantidade_produto" class="form-control"value="<?php echo $bd_id['quantidade_produto'] ?>">
        </div>

        <div class="mb-3">
            <label for="fornecedor_produto">Fornecedor: </label>
            <input type="text" name="fornecedor_produto" id="fornecedor_produto" class="form-control"value="<?php echo $bd_id['fornecedor_produto'] ?>"> 
        </div>

            <input type="submit" value="Atualizar Cadastro de Produto" class="btn btn-primary">
        

    </form>
 </div>       
            
<?php include "footer.php"?>

