<?php include 'cabecalho.php'; include 'conexao.php'; include 'functions.php'; ?>

<?php
$id_s = $_POST['id'];

removeProduto($conexao, $id_s);
header("Location: lista-produto.php?removido=true"); 
die();

?>
 


<?php include 'rodape.php'?>
