<?php
class Tropa {
    private $nome;
    private $imgMain;
    private $imagem;
    private $dados;
    private $treinamento;
    private $atributos;

    public function __construct($nome, $imgMain, $imagem, $dados, $treinamento, $atributos) {
        $this->nome = $nome;
        $this->imgMain = $imgMain;
        $this->imagem = $imagem;
        $this->dados = $dados;
        $this->treinamento = $treinamento;
        $this->atributos = $atributos;
    }

        
    public function showImagem(){
        echo '<img class="img-tropa" src="'.$this->getImgMain().'" alt="'.$this->getNome().'"/>';
    }
    
    public function showImagens(){
        echo '<div class="img-mini">';
        foreach ($this->getImagem() as $value) {
            for($i = 0; $i < count($value) - 1;$i++){
                echo "<figure class='niveis'>";
                echo "<img src='$value[0]' alt=".utf8_encode($value[1])."/>";
                echo "<figcaption>".utf8_encode($value[1])."</figcaption></figure>";
            }
        }
        echo '</div>';
    }
    public function showTabela1(){
        echo '<table class="striped centered">';
        echo '<caption>Tempo de treinamento dos '.utf8_encode($this->getNome()).'</caption>';
        echo '<thead><tr>';
        echo "<th>Número de quartéis no nível {$this->getAtributos()[0][5]}</th><th>Duração do treinamento</th>";
        echo '</tr></thead><tbody>';
        foreach ($this->treinamento as $value) {
            echo '<tr>';
            foreach ($value as $item) {
                echo '<td>'.$item.'</td>';
            }
            echo '</tr>';
        }
        echo '</tbody></table>';
    }
    
    public function showTabela2() {
        echo '<table class="striped centered">';
        echo '<caption>'.utf8_encode($this->getNome()).'</caption>';
        echo '<thead><tr>';
        echo '<th>Nível</th><th>Dano por segundo</th><th>Dano por Ataque</th><th>Pontos de vida</th><th>Custo de treinamento</th><th>Custo atualização</th><th>Nível de laboratório Necessário</th><th>Tempo de atualização</th>';
        echo '</tr></thead><tbody>';
        foreach ($this->dados as $value) {
            echo '<tr>';
            foreach ($value as $item) {
                echo '<td>'.$item.'</td>';
            }
            echo '</tr>';
        }
        echo '</tbody></table>';
    }
    
    public function showTabela3(){
        echo '<table class="striped centered">';
        echo '<caption>Características '.utf8_encode($this->getNome()).'</caption>';
        echo '<thead><tr>';
        echo '<th>Alvo preferencial</th><th>Tipo de Ataque</th><th>Espaço ocupação</th><th>Velocidade de movimento</th><th>Velocidade de ataque</th><th>Necessário Quartel Nível</th><th>Alcance</th>';
        echo '</tr></thead><tbody>';
        foreach ($this->getAtributos() as $value) {
            echo '<tr>';
            foreach ($value as $item) {
                echo '<td>'.$item.'</td>';
            }
            echo '</tr>';
        }
        echo '</tbody></table>';
    }

    public function getDados() {
        return $this->dados;
    }

    public function setDados($dados) {
        $this->dados = $dados;
    }
    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }
    public function getImgMain() {
        return $this->imgMain;
    }

    public function setImgMain($imgMain) {
        $this->imgMain = $imgMain;
    }

    
    public function getImagem() {
        return $this->imagem;
    }

    public function setImagem($imagem) {
        $this->imagem = $imagem;
    }
    
    public function getTreinamento() {
        return $this->treinamento;
    }

    public function getAtributos() {
        return $this->atributos;
    }

    public function setTreinamento($treinamento) {
        $this->treinamento = $treinamento;
    }

    public function setAtributos($atributos) {
        $this->atributos = $atributos;
    }



}