<?php
//incluir o arquivo de conexao com o BD
include "database.php";


//recuperar o ID enviar via link com o GET
$id_produto = $_GET['id_produto'];

//construir a string em SQL
$sql_delete = "DELETE FROM sup_produtos WHERE sup_produtos.id_produto = '$id_produto'";

if(mysqli_query($conexao,$sql_delete)){
    header("location: listar_produtos.php");

} else{
    echo "Falha ao realizar o cadastro";
}