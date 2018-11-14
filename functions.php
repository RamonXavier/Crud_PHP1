<?php include ("conexao.php"); ?>
 <?php 

 function insereProduto($conexao,$nome,$valor,$descricao,$categoria,$usado){
   $query = "insert into produtos (nome, preco, descricao, categoria_id, aula) Values ('{$nome}','{$valor}', '{$descricao}', '{$categoria}',{$usado})";
   $resultadoInserir = mysqli_query($conexao, $query);
       return $resultadoInserir;
}

//,'{$usado}','{$usado}','{$usado}','{$usado}'
//, aula2, aula3, aula4, aula5



function listaProduto ($conexao){
    $produto_Array = array();
    $query_listar = mysqli_query ($conexao,'select p.*, c.nome as categoria_nome from produtos as p join categorias as c on p.categoria_id = c.id');
    while ($mostrar_produtos = mysqli_fetch_assoc ($query_listar)){
    array_push ($produto_Array, $mostrar_produtos);
}
    return $produto_Array;
    
}

function removeProduto ($conexao, $id){
    $remove_prod = "delete from produtos where id = {$id}";
    mysqli_query ($conexao, $remove_prod);
}

function buscaProdutos ($conexao,$id) {
    $query_buscar = "select * from produtos where id ={$id}";
    $resultado_busca = mysqli_query ($conexao, $query_buscar);
    return mysqli_fetch_assoc($resultado_busca);

}

function alteraProduto($conexao, $nome, $valor, $descricao, $categoria, $usado,$id) {
    $query = "update produtos set nome = '{$nome}', preco = {$valor}, descricao = '{$descricao}', 
        categoria_id= {$categoria}, aula = {$usado} where id = '{$id}'";
    return mysqli_query($conexao, $query);
}

?>
