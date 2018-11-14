<?php include 'cabecalho.php' ?>

<?php

function insereUsuario($conexao,$nome,$email,$senha1,$senha2){
$query_usuario = "insert into usuarios (nome,email,senha1,senha2) values ('{$nome}','{$email}','{$senha1}','{$senha2}')";
$resutadoInserirUsuario = mysqli_query($conexao,$query_usuario);
    return  $resutadoInserirUsuario;
    
}

$nome = $_POST ['nome'];
$email = $_POST ['email'];
$senha1 = $_POST ['senha1'];
$senha2 = $_POST ['senha2'];

<?PHP include 'conexao.php';?>

<?php
if(insereUsuario($conexao,$nome,$email,$senha1,$senha2) && $senha1 == $senha2){
?>
    <div  class="text-success">
    <h3 class="principal">Usuário adicionado!!!</h3>
    </div>
 <?php
} else {
    ?>
    <div class="text-danger">
    <h3 class="principal">Senhas não são idênticas, por favor tente novamente!</h3>
    </div>
<?php
}
?>


<?php include 'rodape.php' ?>