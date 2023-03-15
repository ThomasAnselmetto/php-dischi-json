<?php
$song_list = file_get_contents(__DIR__ . "/../data/songs.json");

$song_list_decoded = json_decode($song_list);
// var_dump($song_list_decoded);
// se stampo l'elemento $song_list senza precisarne la natura appare semplicemente come una stringa stampata nell'html,per farlo apparire come oggetto.json uso un HEADER

header("Content-Type: application/json; charset=utf-8");

// In questo momento di fatto ho creato una API ed ora posso far partire dal frontend una richiesta axios che legga questa richiesta



?>