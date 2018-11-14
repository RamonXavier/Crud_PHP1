<?php include("cabecalho.php"); include("cria-categorias.php"); include ("conexao.php") ?>
    <?php $categorias = listaCategorias($conexao); ?>
<form action="adiciona-produto.php" method="post">

    <table class="table" id="table-form">
        <tr>
           <td>Nome</td>
            <td>
                <input class="form-control" type="text" name="nom" /><br/>
            </td>
        </tr>
        <tr>
           <td>Valor</td>
            <td>
                <input class="form-control" type="number" step="any" name="val" /><br/>
            </td>
        </tr>
        <tr>
           <td>Descrição</td>
            <td>
                <textarea  class="form-control" name="descricao"></textarea>
            </td>
        </tr>
        <tr>
            <td>Categoria</td>
            <td>
               <select class="form-control" name="categoria_id">
                <?php foreach ($categorias as $categoria): ?>
                    <option value="<?= $categoria['id']?>">
                    <?php echo $categoria['nome']?>
                   </option>
                <?php endforeach ?>
                </select>
            </td>
        </tr>
         <tr>
            <td>Usado</td>
               <td>
                <input  type="checkbox" value="true" name="aula1">Usado     
                <input  type="checkbox" value="true" name="aula2">Blindado 
                <input  type="checkbox" value="true" name="aula3">Comestível
                <input  type="checkbox" value="true" name="aula4">Proibido para menores 
                <input  type="checkbox" value="true" name="aula5">Requer Certificação
            </td>
        </tr>
        <tr>
            <td>
              <input class="btn btn-primary" type="submit" value="Salvar" />
            </td>
        </tr>
    </table>

</form>
<?php include("rodape.php") ?>
