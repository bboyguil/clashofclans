<?php
    require_once 'Tropa.php';
    require_once 'conexao.php';
    
    $nome = mysqli_query($link,"SELECT nome FROM tropas WHERE tropaID = 1");
    $arrNome = mysqli_fetch_assoc($nome);
    $tNome = $arrNome["nome"];
    
    $imgT = mysqli_query($link,"SELECT imagem FROM tropas WHERE tropaID = 1");
    $arrImg = mysqli_fetch_assoc($imgT);
    $imagemMain = $arrImg["nome"];
    
    $sqlImg = "SELECT i.img, i.legenda FROM tropas AS t INNER JOIN imagens AS i ON t.tropaID = i.tropaID WHERE t.tropaID = 1";
    $queryImg = mysqli_query($link, $sqlImg);
    $imagem = mysqli_fetch_all($queryImg);
    
    $tropa = new Tropa($tNome, $imagem, "dados", "treinamento", "atributos");
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tropa</title>
    </head>
    <body> 
        <h2><?php echo $tropa->getNome() ?></h2>

        <!-- Imagem Principal -->
            <?php $tropa->showImagem();  ?>
        
        <!-- Imagnes da Tropa -->
            <?php //$tropa->showImagens();  ?>

        <!-- Exibe tabela -->
            <?php //$tropa->showTabela1(); ?>
        
        <!-- Exibe tabela -->
            <?php //$tropa->showTabela2(); ?>
        
        <!-- Exibe tabela -->
            <?php //$tropa->showTabela3(); ?>
        
        
        
        
        
        
        
        
    </body>
</html>
