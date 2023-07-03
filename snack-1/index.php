<?php
$mathces = [
    [
        'homeTeam' => 'Celtics',
        'away' => 'Warriosrs',
        'homePoints' => '90',
        'awayPoints' => '103',
    ],
    [
        'homeTeam' => 'Suns',
        'away' => 'Mavericks',
        'homePoints' => '121',
        'awayPoints' => '144',
    ],
    [
        'homeTeam' => 'Celtics',
        'away' => 'Bucks',
        'homePoints' => '109',
        'awayPoints' => '86',
    ],
    [
        'homeTeam' => 'Mavericks',
        'away' => 'Suns',
        'homePoints' => '111',
        'awayPoints' => '101',
    ],
    [
        'homeTeam' => 'Maiami Heat',
        'away' => 'Sixers',
        'homePoints' => '119',
        'awayPoints' => '103',
    ],
    [
        'homeTeam' => 'Warriors',
        'away' => 'Celtics',
        'homePoints' => '99',
        'awayPoints' => '123',
    ],
    [
        'homeTeam' => 'Sixer',
        'away' => 'Maiami Heat',
        'homePoints' => '99',
        'awayPoints' => '79',
    ],
    [
        'homeTeam' => 'Warriors',
        'away' => 'Lakers',
        'homePoints' => '128',
        'awayPoints' => '112',
    ],
    [
        'homeTeam' => 'Raptors',
        'away' => 'Sixers',
        'homePoints' => '119',
        'awayPoints' => '114',
    ]

    ];
?>

<!--Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, 
punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60  -->



<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/style.css">
    <title>Snack 1</title>
</head>
<body>
    <h2>Today's matches</h2>
    <div class="mt-3">
        <!-- ciclo l'array matchces con proprieta match  -->
        <?php foreach($mathces as $match) {?>
            <!-- stampo a schedrmo i risultati delle partite con ordine da team giocato in casa a team fuori casa e punti team casa e punti team fuori casa -->
            <p><?php echo $match['homeTeam'].' - '.$match['away'].' | '.$match['homePoints'].' - '.$match['awayPoints']?></p>
        
        <?php }?>
    </div>

</body>
</html>