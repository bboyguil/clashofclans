<?php
    require_once 'Tropa.php';
    require_once 'conexao.php';
    $id = isset($_GET["tropa"])? $_GET["tropa"]:1;
    
    
    $n = "SELECT nome FROM `tropas` WHERE tropaID = $id";
    $queryName = mysqli_query($link, $n);
    $resNome = mysqli_fetch_assoc($queryName);
    
    $imgMain = "SELECT imagem FROM `tropas` WHERE tropaID = $id";
    $queryMain = mysqli_query($link, $imgMain);
    $resImagem = mysqli_fetch_assoc($queryMain);
    
    $sqlImg = "SELECT i.img, i.legenda FROM tropas AS t INNER JOIN imagens AS i ON t.tropaID = i.tropaID WHERE t.tropaID = $id";
    $queryImg = mysqli_query($link, $sqlImg);
    
    $sql = "SELECT `nivel`, `danoSegundo`, `danoAtaque`, `pontosVida`, `custoTreinamento`, `custoUpdate`, `nivelLaboratorio`, `tempoUpdate` ";
    $sql .= "FROM tropas AS t ";
    $sql .= "INNER JOIN niveis AS n ";
    $sql .= "ON t.tropaID = n.tropaID ";
    $sql .= "WHERE t.tropaID = $id ";
    $sql .= "ORDER BY n.nivel ASC";
    $query = mysqli_query($link, $sql);
    
    $sqltreino = "SELECT `numeroQuarteis`, `duracaoTreino` ";
    $sqltreino .= "FROM tropas AS t ";
    $sqltreino .= "INNER JOIN treino AS tr ";
    $sqltreino .= "ON t.tropaID = tr.tropaID ";
    $sqltreino .= "WHERE t.tropaID = $id ";
    $queryTreino = mysqli_query($link, $sqltreino);
    
    $sqlatt = "SELECT `alvoPreferido`, `tipoAtaque`, `espacoOcupacao`, `velocidadeMovimento`, `velocidadeAtaque`, `nivelQuartel`, `alcance` ";
    $sqlatt .= "FROM tropas AS t ";
    $sqlatt .= "INNER JOIN atributos AS a ";
    $sqlatt .= "ON t.tropaID = a.tropaID ";
    $sqlatt .= "WHERE t.tropaID = $id ";
    $queryAtt = mysqli_query($link, $sqlatt);

    $tropaElixir["gigante"] = new Tropa(
            $resNome["nome"],
            $resImagem["imagem"],
            $imagem = mysqli_fetch_all($queryImg),
            $dados = mysqli_fetch_all($query),
            $treino = mysqli_fetch_all($queryTreino),
            $atributo = mysqli_fetch_all($queryAtt)
            );

    /*
    $tropaElixir["barbaro"] = new Tropa(
            "Bárbaro",
            $imagem = [
                "main" => "img/main-barbaro.png",
                "Nível 1 a 2" => "img/barbaro-1-2.png",
                "Nível 3 a 4" => "img/barbaro-3-4.png",
                "Nível 5" => "img/barbaro-5.png",
                "Nível 6" => "img/barbaro-6.png",
                "Nível 7" => "img/barbaro-7.png"
            ],
            $dados = [
                [1,8,8,	45,25,"N/D","N/D","N/D"],
                [2,11,11,54,40,50000,1,"6 horas"],
                [3,14,14,65,60,150000,3,"1 dia"],
                [4,18,18,78,80,500000,5,"3 dias"],
                [5,23,23,95,150,1500000,6,"5 dias"],
                [6,26,26,110,200,4500000,7,"10 dias"],
                [7,30,30,125,250,6000000,8,"14 dias"]
    ],
            $treino = [
                [1, "28 segundos"],
                [2, "10 segundos"],
                [3, "9 segundos"],
                [4, "7 segundos"]
            ],
            $atributo = [
                [
                    "Dano dobrado em recursos (x2)",
                    "Corpo a copo (Terrestre apenas)", 
                    1,
                    32,
                    "1s",
                    4,
                    "0.4 quadrados"
                    ]
            ]
            );
    
    $tropaElixir["arqueira"] = new Tropa(
            "Arqueira",
            $imagem = [
                "main" => "img/main-arqueira.png",
                "Nível 1 a 2" => "img/arqueira-1-2.png",
                "Nível 3 a 4" => "img/arqueira-3-4.png",
                "Nível 5" => "img/arqueira-5.png",
                "Nível 6" => "img/arqueira-6.png",
                "Nível 7" => "img/arqueira-7.png"
            ],
            $dados = [
                [1,7,7,20,50,"N/A","N/A","N/A"],
                [2,9,9,23,80,50000,1,"12 hours"],
                [3,12,12,28,120,250000,3,"2 days"],
                [4,16,16,33,200,750000,5,"3 days"],
                [5,20,20,40,300,2250000,6,"5 days"],
                [6,22,22,44,400,6000000,7,"10 days"],
                [7,25,25,48,500,7500000,8,"14 days"]
            ],
            $treino = [
                [1, "28 segundos"],
                [2, "10 segundos"],
                [3, "9 segundos"],
                [4, "7 segundos"]
            ],
            $atributo = [
                [
                    "Dano dobrado em recursos (x2)",
                    "Corpo a copo (Terrestre apenas)", 
                    1,
                    32,
                    "1s",
                    4,
                    "0.4 quadrados"
                    ]
            ]

    );

    $tropaElixir["goblin"] = new Tropa(
            "Goblin",
            $imagem = [
                "main" => "img/main-goblin.png",
                "Nível 1 a 2" => "img/goblin-1-2.png",
                "Nível 3 a 4" => "img/goblin-3-4.png",
                "Nível 5" => "img/goblin-5.png",
                "Nível 6" => "img/goblin-6.png",
                "Nível 7" => "img/goblin-7.png"
            ],
            $dados = [
                [1,11,22,25,25,'N/A','N/A','N/A'],
                [2,14,28,30,40,50000,1,'12 horas'],
                [3,19,38,36,60,250000,3,'2 dias'],
                [4,24,48,43,80,750000,5,'3 dias'],
                [5,32,64,52,100,2250000,6,'5 dias'],
                [6,42,84,68,150,4500000,8,'10 dias']
            ],
            $treino = [
                [1, "28 segundos"],
                [2, "10 segundos"],
                [3, "9 segundos"],
                [4, "7 segundos"]
            ],
            $atributo = [
                [
                    "Dano dobrado em recursos (x2)",
                    "Corpo a copo (Terrestre apenas)", 
                    1,
                    32,
                    "1s",
                    4,
                    "0.4 quadrados"
                    ]
            ]
    );
            

    $tropaNegra["valquiria"] = new Tropa(
            "Valquíria",
            $imagem = [
                "main" => "img/main-valquiria.png",
                "Nível 1 a 2" => "img/valquiria-1-2.png",
                "Nível 3 a 4" => "img/valquiria-3-4.png",
                "Nível 5" => "img/valquiria-5.png",
                "Nível 6" => "img/valquiria-6.png",
            ],
            $dados = [
                [1,94,169.2,750,70,'N/A','N/A','N/A'],
                [2,106,190.8,800,100,50000,6,'8 days'],
                [3,119,214.2,850,130,60000,7,'10 days'],
                [4,133,239.4,900,160,70000,7,'12 days'],
                [5,148,266.4,1100,190,110000,8,'14 days'],
                [6,163,293.4,1200,220,150000,9,'14 days']
            ],
            $treino = [
                [1, "28 segundos"],
                [2, "10 segundos"],
                [3, "9 segundos"],
                [4, "7 segundos"]
            ],
            $atributo = [
                [
                    "Dano dobrado em recursos (x2)",
                    "Corpo a copo (Terrestre apenas)", 
                    1,
                    32,
                    "1s",
                    4,
                    "0.4 quadrados"
                    ]
            ]
            );
    
     */