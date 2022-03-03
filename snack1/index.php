<?php
// Snack 1
// Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, 
//che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”

$name = $_GET['name'] ?? '';
$mail = $_GET['mail'] ?? '';
$age = $_GET['age'] ?? '';


$valid_name = mb_strlen($name) > 3;
$valid_mail = strpos($mail, '@') !== false && strpos($mail, '.') !== false;
$valid_age = is_numeric($age);

$name = 'Davide';
$mail = 'davidecroce10@gmail.com';
$age = 21;



if ($valid_name && $valid_mail && $valid_age) {
    echo 'Benvenuto!';
} else {
    echo 'Accesso non consetito';
}
