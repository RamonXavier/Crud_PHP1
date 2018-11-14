<?php include 'cabecalho.php' ?>
<form action="adiciona-usuario.php" method="post">
    <div table>
        <tr>
            <td>
                Nome Completo:
                <input class="form-control" type="text" max="255" name="nome"><br><br>
            </td>
        </tr>
        <tr>
            <td>
                Email:
                <input class="form-control" type="email" name="email"><br><br>
            </td>
        </tr>
        <tr>
            <td>
                Senha:
                <input class="form-control" type="password" name="senha1"><br><br>
            </td>
        </tr>
        <tr>
            <td>
                Repita a Senha:
                <input class="form-control" type="password" name="senha2"><br><br>
            </td>
        </tr>
        <tr>
            <td>
                <input class="btn btn-primary" type="submit" name="Salvar"><br><br>
            </td>
        </tr>
    </div>
    <div class="form1">

    </div>
</form>
<?php include 'rodape.php' ?>
