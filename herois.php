<?php require_once 'includes/header.php' ?>
<body>
<div class="row  container">
<?php require_once 'includes/nav.php' ?>
<section class="col s12 container">
    <article class="col s12 m12 l9 grey lighten-5">
        <!-- Exibe Nome da Tropa -->
        <h2><?php echo $tNome ?></h2>
        
        <!-- Exibe Imagem Grande -->
        <img class='img-tropa' src='<?php echo $imgMain ?>' alt='<?php echo $tNome ?>'>
        
        <!-- Exibe Imagens pequenas -->
        <div class="img-mini">
            <?php foreach ($imgTropa as $key => $value): ?>
                <figure class="niveis">
                    <img src='<?php echo $value ?>' alt='<?php echo $key ?>'>
                    <figcaption><?php echo $key ?></figcaption>
                </figure>
            <?php endforeach; ?>
        </div>
            
        <!-- Exibe tabela -->
            <?php $tropaElixir[$l]->showTabela(); ?>
    </article>
<aside class="col s12 m12 l3 grey lighten-3">
<form method="GET" action="index.php">
    <fieldset>
        <legend>Tropas</legend>
        <div class="_input-field">
               <select name="tropa" class="icons">
               <option value="" disabled selected>Selecione uma tropa</option>
                  <optgroup label="Tropas Comuns">
                     <?php foreach ($tropaElixir as $key => $value) {
                        echo '<option data-icon="'.$tropaElixir[$key]->getImagem()['Nível 5'].'" class="left circle" value="'.$key.'">'.$tropaElixir[$key]->getNome().'</option>';
                     } ?>
                  </optgroup>
                  <optgroup label="Tropas Negras">
                     <?php foreach ($tropaNegro as $key => $value) {
                            echo '<option data-icon="'.$tropaNegro[$key]->getImagem()['Nível 5'].'" class="left circle" value="'.$key.'">'.$tropaNegro[$key]->getNome().'</option>';
                     } ?>
                  </optgroup>
               </select>
            </div>
        <button type="submit" class="btn waves-effect waves-light" value="Carregar">Carregar</button>
    </fieldset> 
</form>
</aside>
</section>
<footer class="col s12 page-footer">
    <?php require_once 'includes/footer.php'; ?>
</footer>
</div>
</div>
<script src="js/jquery-3.2.1.min.js"></script>
 <!-- Compiled and minified JavaScript -->
<script src="js/materialize.min.js"></script>
<script>
    $(document).ready(function(){
        $('select').material_select();
    });
</script>
</body>
</html>