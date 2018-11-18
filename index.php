<?php require_once 'includes/header.php' ?>
<body>
<div class="row  container">
<?php require_once 'includes/nav.php' ?>
<section class="container col s12">
    <article class="col s12 m12 l9 grey lighten-5">
        <h2>Clash Of Clans</h2>
        <img class="center" src="img/clash-of-clans-wiki.png" alt="Clash Of Clans Wiki"/>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse non erat augue. Donec lectus massa, pretium sed purus eget, facilisis dictum velit. Sed at mattis tortor, eu vestibulum tortor. Vivamus vulputate pellentesque odio, eu tempus libero laoreet in. Ut gravida pharetra purus, nec bibendum purus fermentum interdum. Integer porttitor neque quis tincidunt lacinia. Etiam eu justo ut ante aliquam ultricies. Sed dictum purus vel magna condimentum, nec bibendum tellus feugiat. Duis porttitor massa sed aliquet sodales. Proin cursus egestas massa eu hendrerit. Praesent porta finibus metus vel porta. Proin nisl eros, viverra varius viverra eget, fermentum sit amet magna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas porttitor sagittis porta.

        <p>Donec at elit egestas, elementum sem eget, commodo sem. Sed varius euismod sem. Pellentesque rutrum scelerisque libero, vitae semper nunc sodales fermentum. Vivamus vitae sollicitudin eros, sed tristique enim. Nam turpis tellus, efficitur eu gravida eu, venenatis tincidunt magna. Cras mi sapien, aliquam vitae ultricies sit amet, ullamcorper id tortor. Sed volutpat lobortis lectus, vel auctor augue ultrices at. Cras nec commodo eros. Sed vulputate lacinia magna, ut faucibus nisl tincidunt eget. Nunc porttitor diam sollicitudin turpis pretium accumsan. Integer sit amet erat suscipit, consequat metus sit amet, pretium nibh. Aenean gravida bibendum tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.

        <p>Proin nec interdum neque. Phasellus consectetur mollis neque quis fermentum. Nullam porta lectus nec justo dignissim, non vestibulum turpis maximus. Donec eget dignissim arcu, a euismod erat. Donec sem ex, consectetur aliquam ultrices in, semper eget velit. Duis ac felis mauris. Vivamus eu ex accumsan, consequat ipsum a, porta turpis. Curabitur nec posuere dui. Pellentesque ac sapien in lectus elementum ultricies nec eu metus. Cras bibendum porta felis sed malesuada. In luctus dictum eros, nec varius diam accumsan vitae. Vivamus pharetra id purus in viverra. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin congue augue vitae dolor rutrum, quis pretium risus tincidunt.
        </p>
        <hr>
<table class="striped">
    <tr class="orange">
        <th colspan="2" class="center">Tropas</th>
    </tr>
    <tr>
       <td>Camada 1</td>
       <td>Bárbaro, Arqueira,Goblin</td>
    </tr>
    <tr>
       <td>Camada 2</td>
       <td>Gigante,Destruidor de Muros,Balão,Mago</td>
    </tr>
    <tr>
       <td>Camada 3</td>
       <td>Curandeira,Dragão,P.E.K.K.A,</td>
    </tr>
    <tr>
       <td>Tropas de Elixir Negro</td>
       <td>Servo,Corredor,Valquíria,Golem,Bruxa</td>
    </tr>
    <tr>
       <td>Heróis</td>
       <td>Rei Bárbaro,Rainha Arqueira</td>
    </tr>
    <tr>
       <td>Feitiços</td>
       <td>Feitiço de Relâmpago,Feitiço de Cura,Feitiço de Fúria,Feitiço de Salto,Feitiço de Gelo</td>
    </tr>
</table>   
    </article>
    <aside class="col s12 m12 l3 grey lighten-3">
        <form method="GET" action="tropas.php">
            <fieldset>
                <legend><h4>Tropas</h4></legend>
                <div class="input-field">
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
                <button type="submit" class="btn waves-effect waves-light orange lighten-1" value="Carregar">Carregar</button>
            </fieldset> 
        </form>
    </aside>
</section>
<footer class="col s12 page-footer">
    <?php require_once 'includes/footer.php'; ?>
</footer>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <!-- Compiled and minified JavaScript -->
<script src="js/materialize.min.js"></script>
<script src="js/function.js"></script>
</body>
</html>
