<?php
    include 'conexao.php';
    $tropa = isset($_GET['tropa'])?$_GET['tropa']:'gigante';
    $sql = "SELECT * FROM $tropa ORDER BY nivel ASC";
    $result = mysqli_query($link, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Teste</title>
    <link type="text/css" rel="stylesheet" href="css/tabela.css"/>
</head>
<body>
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
        <td><?php echo $res['custoAtualizacao']; ?></td>
        <td><?php echo $res['nivelLaboratorio']; ?></td>
        <td><?php echo $res['tempoAtualizacao']; ?></td>
    </tr>
    <?php endwhile; ?> 
</table>
</body>
</html>
<?php mysqli_close($link) ?>