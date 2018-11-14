<?php include("cabecalho.php") ?>
<div class="principal">
    <h1>Bem vindo!!!</h1>
    <?php 

$lista = array (0,3,7,0,1,9,15);
 function soma($lista){
     $j= count ($lista);
     $resultado = 0;     
     for ($i = 0; $i < $j; $i++){ 
         $resultado = $resultado + $lista[$i]; 
     }
      echo "O Resultado de todos os números do Array é: ".$resultado ;
 }
soma($lista);
?>
</div>
<?php include ("rodape.php") ?>