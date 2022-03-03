<?php

// Snack 3
// Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta.

$numbs = [];

while (count($numbs) !==  15) {
    $r_numbs = rand(1, 100);
    if (!in_array($r_numbs, $numbs)) {
        $numbs[] = $r_numbs;
    }
}
echo '<pre>';
var_dump($numbs);
echo '</pre>';
