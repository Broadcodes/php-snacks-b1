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

    $post = [
        '12-01-2002' => [
            'Perché, in verità, era un caso insolito e speciosissimo quello d\'un jettatore che si
             querelava per diffamazione contro i primi due che gli erano caduti sotto gli occhi nell\'atto 
             di far gli scongiuri di rito al suo passaggio.',
            'Diffamazione? Ma che diffamazione, povero disgraziato,
             se già da qualche anno era diffusissima in tutto il paese la sua fama di jettatore?',
            'Se innumerevoli testimonii potevano venire in tribunale a giurare che egli in tante e tante occasioni
             aveva dato segno di conoscere quella sua fama, ribellandosi con proteste violente?'
        ],
        '29-03-2020' => [
            'Come condannare, in coscienza, quei due giovanotti quali diffamatori per aver fatto al passaggio
             di lui il gesto che da tempo solevano fare apertamente tutti gli altri, e primi fra tutti eccoli là gli stessi giudici?',
            'Tutti, tutti ci credono! E ci son tante case da giuoco in questo paese!
             Basterà ch’io mi presenti; non ci sarà bisogno di dir nulla.',
            'Mi pagheranno per farmi andar via! Mi metterò a ronzare intorno a tutte le fabbriche; mi pianterò innanzi
             a tutte le botteghe; e tutti, tutti mi pagheranno la tassa, lei dice dell’ignoranza?',
            'Perché, signor giudice, ho accumulato tanta bile e tanto odio, io, contro tutta questa schifosa umanità,
             che veramente credo d’avere ormai in questi occhi la potenza di far crollare dalle fondamenta una intera città!',
            'Si sprofondava tanto in questa tetraggine, che gli occhi aggrottati, a un certo punto, gli si chiudevano. Con la
             penna in mano, dritto sul busto, il giudice D’Andrea si metteva allora a pisolare, prima raccorciandosi, poi
             attrappandosi come un baco infratito che non possa più fare il bozzolo.'
        ],
        '02-08-2015' => [
            'Era veramente iniquo quel processo là: iniquo perché includeva una spietata ingiustizia contro alla quale un
             pover’uomo tentava disperatamente di ribellarsi senza alcuna probabilità di scampo.',
            'C’era in quel processo
             una vittima che non poteva prendersela con nessuno.'
        ],
        '15-04-2006' => [
            'A passeggio cercava di parlarne coi colleghi, ma questi, appena egli faceva il nome del Chiàrchiaro, cioè di
             colui che aveva intentato il processo, si alteravano in viso e si ficcavano subito una mano in tasca a
             stringervi una chiave.',
            'Ma non poteva starsi zitto il magro giudice D’Andrea. Se n’era fatta proprio una fissazione, di quel processo.
             Gira gira, ricascava per forza a parlarne.',
            'Il Chiàrchiaro s’era combinata una faccia da jettatore, ch’era una meraviglia a vedere.',
            'Orbene, proprio per non dare al paese lo spettacolo di quella «magnifica festa» alle spalle d’un povero
             disgraziato, il giudice D’Andrea prese alla fine la risoluzione di mandare un usciere in casa del Chiàrchiaro
             per invitarlo a venire all’ufficio d’Istruzione.'
        ]
    ];

    $keys = array_keys($post);
    $articles = array_values($post);

    
    for($i = 0; $i < count($post); $i++){
    ?>
        <h3><?= $keys[$i] ?>: </h3>
        
        <?php 
            for($j = 0; $j < count($articles[$i]); $j++){
                ?>
                    <p style="margin-left: 20px"><?= $articles[$i][$j] ?></p>
                <?php
            }
        ?>

    <?php
    }
    ?>
</div>