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