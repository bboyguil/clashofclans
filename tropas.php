<?php require_once 'includes/header.php' ?>
<body>
<div class="row  container">
<?php require_once 'includes/nav.php' ?>
<section class="container col s12">
    <article class="col s12 m12 l9 grey lighten-5">
        
        
        
        <h2><?php echo utf8_encode($tropaElixir[$l]->getNome()) ?></h2>
        <!-- Imagem Principal -->
            <?php $tropaElixir[$l]->showImagem();  ?>
        <!-- Imagens da Tropa -->
            <?php $tropaElixir[$l]->showImagens();  ?>

        <!-- Exibe tabela -->
            <?php $tropaElixir[$l]->showTabela1(); ?>
        
        <!-- Exibe tabela -->
            <?php $tropaElixir[$l]->showTabela2(); ?>
        
        <!-- Exibe tabela -->
            <?php $tropaElixir[$l]->showTabela3(); ?>
    </article>
<aside class="col s12 m12 l3 grey lighten-3">
<form method="GET" action="tropas.php">
    <fieldset>
        <legend><h4>Tropas</h4></legend>
        <div class="_input-field">
            <select name="tropa" class="_icons">
                    <option value="" disabled selected>Selecione uma tropa</option>
                <optgroup label="Tropas Comuns">
                    <?php while($select = mysqli_fetch_assoc($queryMenu)): ?>
                    <option value="<?php echo $select["tropaID"] ?>"><?php echo utf8_encode($select["nome"]) ?></option>
                    <?php endwhile; ?>
                </optgroup>
            </select>
        </div>
        <button type="submit" class="btn waves-effect waves-light orange lighten-1" value="Carregar">Carregar</button>
    </fieldset> 
</form>
</aside>
</section>
<footer class="col s12 page-footer">
    <?php require_once 'includes/footer.php'; ?>
</footer>
</div>
    <script src="js/jquery-3.2.1.min.js"></script>
 <!-- Compiled and minified JavaScript -->
<script src="js/materialize.min.js"></script>
<script src="js/function.js"></script>
</body>
</html>
