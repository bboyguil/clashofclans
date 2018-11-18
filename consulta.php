<?php
    require_once 'conexao.php';
    
    $tropa = isset($_GET["tropa"])? $_GET["tropa"] :1;
    $sql = "SELECT n.nivel,n.danoSegundo,n.danoAtaque,n.pontosVida,n.custoTreinamento,n.custoUpdate,n.nivelLaboratorio,n.tempoUpdate ";
    $sql .= "FROM tropas AS t ";
    $sql .= "INNER JOIN niveis AS n ";
    $sql .= "ON t.tropaID = n.tropaID ";
    $sql .= "WHERE t.tropaID = $tropa ";
    $sql .= "ORDER BY nivel ASC";
    
    $img = "SELECT imagens.img, imagens.legenda ";
    $img .= "FROM tropas ";
    $img .= "INNER JOIN imagens ";
    $img .= "ON tropas.tropaID = imagens.tropaID ";
    $img .= "WHERE imagens.tropaID = $tropa";
    
    $treino = "SELECT tn.numeroQuarteis, tn.duracaoTreino ";
    $treino .= "FROM tropas AS tp ";
    $treino .= "INNER JOIN treino AS tn ";
    $treino .= "ON tp.tropaID = tn.tropaID ";
    $treino .= "WHERE tp.tropaID = $tropa ";
    
    $quartel = "SELECT nivelQuartel ";
    $quartel .= "FROM atributos ";
    $quartel .= "WHERE tropaID = {$tropa}";
    $nivelQuartel = mysqli_query($link, $quartel);
    $dadoquartel = mysqli_fetch_assoc($nivelQuartel);
    
    $result = mysqli_query($link, $sql);
    $resImg = mysqli_query($link, $img);
    $resTreino = mysqli_query($link, $treino);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Texte Conexao</title>
        <link type="text/css" rel="stylesheet" href="css/tabela.css"/>
    </head>
    <body>
        <div class="galeria-fotos">
        <?php while($imgTropa = mysqli_fetch_assoc($resImg)): ?>
        <div class="imagens">
            <figure>
                <img src="<?php echo $imgTropa["img"] ?>"/>
                <figcaption><?php echo utf8_encode($imgTropa["legenda"]) ?></figcaption>
            </figure>
        </div>
        <?php endwhile; ?>
        </div>
    <!-- Tabela de Treino -->    
    <table>
        <tr>
            <th>Número de quartéis nível <?= $dadoquartel["nivelQuartel"] ?></th>
            <th>Duração do treino</th>
        </tr>
    <?php while ($treinoTropa = mysqli_fetch_assoc($resTreino)): ?>
        <tr>
            <td><?php echo $treinoTropa['numeroQuarteis']; ?></td>
            <td><?php echo $treinoTropa['duracaoTreino']; ?></td>
        </tr>
    <?php endwhile; ?>    
    </table>
    <!-- Fim Tabela de Treino --> 
    <hr>
        
        
        
    <table>
        <tr>
            <th>Nível</th>
            <th>Dano por segundo</th>
            <th>Dano por Ataque</th>
            <th>Pontos de vida</th>
            <th>Custo de treinamento</th>
            <th>Custo atualização</th>
            <th>Nível de laboratório Necessário</th>
            <th>Tempo de atualização</th>
        </tr>
<?php while ($res = mysqli_fetch_assoc($result)): ?>
    <tr>
        <td><?php echo $res['nivel']; ?></td>
        <td><?php echo $res['danoSegundo']; ?></td>
        <td><?php echo $res['danoAtaque']; ?></td>
        <td><?php echo $res['pontosVida']; ?></td>
        <td><?php echo $res['custoTreinamento']; ?></td>
        <td><?php echo $res['custoUpdate']; ?></td>
        <td><?php echo $res['nivelLaboratorio']; ?></td>
        <td><?php echo $res['tempoUpdate']; ?></td>
    </tr>

    <?php endwhile; ?> 
</table>
    </body>
</html>
<?php mysqli_close($link) ?>