<?php 
include ('cabecalho.php'); include ('conexao.php'); include ('functions.php') ?>

<table class="table table-dark table-bordered">

    <?php if(array_key_exists("removido", $_GET) && $_GET['removido']=='true') { ?>
    <p class="alert-success">Produto apagado com sucesso.</p>
    <?php } ?>
    <?php $produto_Array = listaProduto($conexao);
            foreach ($produto_Array as $mostrar_produtos){
            ?>
    <tr>
        <td>
            <?= $mostrar_produtos['nome']?>
        </td>
        <td>
            <?= $mostrar_produtos['preco']?>
        </td>
        <td>
            <?= substr($mostrar_produtos['descricao'],0,25)?>
        </td>        
        <td>
            <?= $mostrar_produtos['categoria_nome']?>
        </td>
        <td>
            <form action="remove-produto.php" method="post">
                <input type="hidden" name="id" value="<?=$mostrar_produtos['id']?>" />
                <button class="btn btn-danger" >Remover</button>
            </form>
        </td>
         <td>
             <a href="altera-produtto.php?id= <?= $mostrar_produtos['id']?>" class="btn btn-primary" >Alterar</a>
        </td>
    </tr>
    <?php
}

?>
</table>

<?php

    
?>

    <?php include ('rodape.php') ?>