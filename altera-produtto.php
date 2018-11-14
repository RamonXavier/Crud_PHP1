<?php include("cabecalho.php"); include("cria-categorias.php"); include ("conexao.php"); include ('functions.php'); ?>
    <?php 

$id = $_GET['id']; 
$mostrar_produtos = buscaProdutos($conexao,$id);
$categorias = listaCategorias($conexao); 
$usado = $mostrar_produtos['aula'] ? "checked = 'checked'" : "";

?>
    
<form action="altera-produtto-final.php" method="post">

    <table class="table" id="table-form">
        <tr>
           <td>Nome</td>
            <td>
                <input class="form-control" type="text" name="nom" value= "<?= $mostrar_produtos['nome']?>"/><br/>
            </td>
        </tr>
        <tr>
           <td>Valor</td>
            <td>
                <input class="form-control" type="number" step="any" name="val" value= "<?= $mostrar_produtos['preco']?>" /><br/>
            </td>
        </tr>
        <tr>
           <td>Descrição</td>
            <td>
                <textarea  class="form-control" name="descricao"><?= $mostrar_produtos['descricao']?></textarea>
            </td>
        </tr>
        <tr>
            <td>Categoria</td>
            <td>
               <select class="form-control" name="categoria_id">
                <?php 
                        foreach ($categorias as $categoria): 
                            $essaEhACategoria = $mostrar_produtos['categoria_id'] == $categoria['id'];
                            $selecao = $essaEhACategoria ? "selected='selected'" : ""; 
                ?>
                    <option value="<?= $categoria['id']?>" <?= $selecao ?>>
                    <?php echo $categoria['nome']?>
                   </option>
                <?php endforeach ?>
                </select>
            </td>
        </tr>
         <tr>
            <td>Usado</td>
               <td>
                <input  type="checkbox" value="true" <?= $usado ?> name="aula1">Usado     
                <input  type="checkbox" value="true" <?= $usado ?> name="aula2">Blindado 
                <input  type="checkbox" value="true" <?= $usado ?> name="aula3">Comestível
                <input  type="checkbox" value="true" <?= $usado ?> name="aula4">Proibido para menores 
                <input  type="checkbox" value="true" <?= $usado ?> name="aula5">Requer Certificação
            </td>
        </tr>
        <tr>
            <td>
                <button class="btn btn-primary" type="submit">Alterar</button>
            </td>
            <td><input type="hidden" name="id" value="<?= $mostrar_produtos['id']?>" /></td>
        </tr>
    </table>

</form>
<?php include("rodape.php") ?>


