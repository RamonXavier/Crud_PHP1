<?php include ("cabecalho.php");
include ("functions.php"); include ("conexao.php");?>

<?php
 $nome = $_POST['nom'];
 $valor = $_POST['val'];
 $descricao = $_POST['descricao'];
 $categoria = $_POST['categoria_id'];
if(array_key_exists('aula',$_POST)){
    $usado = "true";
}else{
    $usado = "false";
}
?>

    <?php
if(insereProduto($conexao,$nome,$valor,$descricao,$categoria,$usado)){
?>
    <p class="text-success"> Produto
        <?= $nome; ?>,R$
            <?= $valor; ?> adicionado com sucesso!</p>

    <?php            
}else {
?>
    <p class="text-danger">Produto
        <?= $nome; ?>,não foiadicionado com sucesso!</p>


    <?php      
       echo mysqli_error($conexao);
   }
?>

    <?php include ("rodape.php") ?>