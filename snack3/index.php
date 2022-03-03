<?php

// Snack 1
// Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
// Snack 2
// Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
// Qui l’array di esempio: https://www.codepile.net/pile/R2K5d68z
// Snack 3
// Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta.

$numbs = [];

while (count($numbs) !=  15) {
    $r_numbs = rand(1, 100);
    if (!in_array($r_numbs, $numbs)) {
        $numbs = $r_numbs;
    }
};

var_dump($numbs);
