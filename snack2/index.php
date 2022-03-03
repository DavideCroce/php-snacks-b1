<?php

// Snack 2
// Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. 
// Stampare ogni data con i relativi post.
// Qui l’array di esempio: https://www.codepile.net/pile/R2K5d68z

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Kaido.... We are on the way',
            'author' => 'Monkey D. Rufy',
            'text' => 'I\'m coming to beat ur ass up! Prepare yourself... Me and my crew are charged for the final battle... Wait on your stupid Onigashima. We are gonna liberate Wanokuni!!',
            'image' => 'https://c4.wallpaperflare.com/wallpaper/442/1004/871/anime-one-piece-straw-hat-pirate-strawhat-wallpaper-preview.jpg'
        ],
        [
            'title' => 'What a stupid kid...',
            'author' => 'Trafalgar D. Water Law',
            'text' => 'I\'m helping a really stupid kiddo... pls god help me!!!',
            'image' => 'https://qph.cf2.quoracdn.net/main-qimg-afce9309b1320352b98b62cb845ea086'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => '...',
            'author' => 'Pirate Emperor Kaido',
            'text' => 'A cockroach is annoying me...',
            'image' => 'https://otakukart.com/wp-content/uploads/2021/09/Kaidou-1.jpg'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Finally',
            'author' => 'Roronoa Zoro',
            'text' => 'Finally we won against Kaido and his crew ... and that fucking old woman was really annoying!!! My blades are satisfied',
            'image' => 'https://i.pinimg.com/564x/e8/99/d5/e899d50ac8be66390393e74b9a21def7.jpg'
        ],
    ],
];

$dates = array_keys($posts)
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="icon" href="https://icons.iconarchive.com/icons/crountch/one-piece-jolly-roger/256/Luffys-flag-icon.png">
    <title>OneBook</title>
</head>

<body>
    <div class="container">
        <?php for ($i = 0; $i < count($dates); $i++) {
            $date = $dates[$i];
            $post = $posts[$date];
        ?>
            <em><?= $date ?></em>
            <h3><?= $date['author'] ?></h3>
        <? } ?>
        </ul>
    </div>
</body>

</html>