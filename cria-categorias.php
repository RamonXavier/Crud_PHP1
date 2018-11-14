<?php include ('conexao.php');?>


<?php

function listaCategorias($conexao){
    $categorias = array ();
    $query = "select * from categorias";
    $busca = mysqli_query ($conexao, $query);
    
    while($categoria = mysqli_fetch_assoc($busca)){
        array_push($categorias,$categoria);
    }
    
    return $categorias;
}
?>