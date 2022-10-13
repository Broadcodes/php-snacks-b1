<div style="background-color: #ddd; padding: 20px 40px; border: 1px solid black; margin: 20px">
    <h2>Snack 1</h2>
    <?php
    /*
    Snack 1
    Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
    Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di
    casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
    Olimpia Milano - Cantù | 55-60
    */

    $match = [
        [
            'homeTeam' => 'ATLANTA HAWKS',
            'scoreHomeTeam' => '54',
            'visitingTeam' => 'MIAMI HEAT',
            'scoreVisitingTeam' => '34'
        ],
        [
            'homeTeam' => 'BOSTON CELTICS',
            'scoreHomeTeam' => '23',
            'visitingTeam' => 'BROOKLYN NETS',
            'scoreVisitingTeam' => '54'
        ],
        [
            'homeTeam' => 'CHARLOTTE HORNETS',
            'scoreHomeTeam' => '43',
            'visitingTeam' => 'CLEVELAND CAVALIERS',
            'scoreVisitingTeam' => '45'
        ],
        [
            'homeTeam' => 'CHICAGO BULLS',
            'scoreHomeTeam' => '65',
            'visitingTeam' => 'DETROIT PISTONS',
            'scoreVisitingTeam' => '54'
        ],
        [
            'homeTeam' => 'ORLANDO MAGIC',
            'scoreHomeTeam' => '23',
            'visitingTeam' => 'PHILADELPHIA 76ERS',
            'scoreVisitingTeam' => '54'
        ],
        [
            'homeTeam' => 'INDIANA PACERS',
            'scoreHomeTeam' => '43',
            'visitingTeam' => 'TORONTO RAPTORS',
            'scoreVisitingTeam' => '44'
        ]
    ];

        for($i = 0; $i < count($match); $i++){
    ?>

    <p><span style="color: green"><?= $match[$i]['homeTeam']?></span> - <span style="color: red"><?= $match[$i]['visitingTeam']?></span>
    | <span style="font-weight: 600"><?= $match[$i]['scoreHomeTeam']?> - <?= $match[$i]['scoreVisitingTeam']?></span></p>

    <?php
        }
    ?>
</div>

<div style="background-color: #ddd; padding: 20px 40px; border: 1px solid black; margin: 20px">
    <h2>Snack 2</h2>
    <?php
    /*
    Snack 2
    Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione)
    che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero.
    Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
    */

    if(isset( $_GET['name'], $_GET['mail'], $_GET['age'] )){
        $name = $_GET['name'];
        $mail = $_GET['mail'];
        $age = $_GET['age'];

        if(strlen($name) > 3 && strpos($mail, '.') && strpos($mail, '@') && is_numeric($age)){
            ?>
                <p style="color: green">Accesso riuscito</p>
            <?php
        } else {
            ?>
                <p style="color: red">Accesso negato</p>
            <?php
        }

    } else {
        echo 'Nessun valore passato tramite GET';
    };
    ?>
</div>

<div style="background-color: #ddd; padding: 20px 40px; border: 1px solid black; margin: 20px">
    <h2>Snack 3</h2>
    <?php
    /*
    Snack 3
    Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007
    e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
    */

    $posts = [

        '10/01/2019' => [
            [
                'title' => 'Post 1',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 1'
            ],
            [
                'title' => 'Post 2',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 2'
            ],
        ],
        '10/02/2019' => [
            [
                'title' => 'Post 3',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 3'
            ]
        ],
        '15/05/2019' => [
            [
                'title' => 'Post 4',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 4'
            ],
            [
                'title' => 'Post 5',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 5'
            ],
            [
                'title' => 'Post 6',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 6'
            ]
        ],
    ];

    $keys = array_keys($posts);

    for($i = 0; $i < count($posts); $i++){
        ?>
            <h3><?= $keys[$i] ?></h3>
        <?php

        for($j = 0; $j < count($posts[$keys[$i]]); $j++){
            $keysIn = array_keys($posts[$keys[$i]][$j]);
            $valuesIn = array_values($posts[$keys[$i]][$j]);

            ?>
            <div style="padding: 10px; border: 1px solid black; margin: 10px">
            
                <?php

                    for($x = 0; $x < count($keysIn); $x++){
                    ?>
                        <p><span style="font-weight: 600; text-transform: uppercase"><?= $keysIn[$x] ?>: </span><?= $valuesIn[$x] ?></p>
                    <?php
                    }

                ?>

            </div>
            <?php
        }
    }
    ?>
</div>

<div style="background-color: #ddd; padding: 20px 40px; border: 1px solid black; margin: 20px">
    <h2>Snack 4</h2>
    <?php
    /*
    Snack 4
    Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo
    in tanti paragrafi. Ogni punto un nuovo paragrafo.
    */

    $text = 'Così sbilenco, con una spalla più alta dell’altra, andava per via di traverso, come i cani. Nessuno però,
    moralmente, sapeva rigar più diritto di lui. Lo dicevano tutti.
    Vedere, non aveva potuto vedere molte cose, il giudice D’Andrea; ma certo moltissime ne aveva pensate, e
    quando il pensare è più triste, cioè di notte.
    Il giudice D’Andrea non poteva dormire.
    Passava quasi tutte le notti alla finestra a spazzolarsi una mano a quei duri gremiti suoi capelli da negro, con
    gli occhi alle stelle, placide e chiare le une come polle di luce, guizzanti e pungenti le altre; e metteva le più
    vive in rapporti ideali di figure geometriche, di triangoli e di quadrati, e, socchiudendo le palpebre dietro le
    lenti, pigliava tra i peli delle ciglia la luce d’una di quelle stelle, e tra l’occhio e la stella stabiliva il legame d’un
    sottilissimo filo luminoso, e vi avviava l’anima a passeggiare come un ragnetto smarrito.
    Il pensare così di notte non conferisce molto alla salute. L’arcana solennità che acquistano i pensieri
    produce quasi sempre, specie a certuni che hanno in sè una certezza su la quale non possono riposare, la
    certezza di non poter nulla sapere e nulla credere non sapendo, qualche seria costipazione. Costipazione
    d’anima, s’intende.';

    ?>

    <p>
       <?=
            str_replace('.', '</p><p>', $text);
        ?> 
    </p>

    
</div>