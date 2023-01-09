<?php

$notes = array(
    "maths" => [15, 17, 12],
    "francais" => [14, 11],
    "sport" => [16, 18, 10],
    "anglais" => [13, 19]
);

function affiche($array)
{
    echo "Les notes de Paul sont :<br>";
    foreach ($array as $key => $value) {
        if ($array[$key][2]) {
            echo $value[0] . ', ' .  $value[1] . ', ' . $value[2] . ' en ' . $key . '.<br>';
        } else {
            echo $value[0] . ', ' .  $value[1] . ' en ' . $key . '.<br>';
        }
    }
}
affiche($notes);

$moyenne_tableau = array();

function moyenne($array)
{
    foreach ($array as $key) {
        $moyenne = array_sum($key) / count($key);
        $result =  (float)round($moyenne, 1, PHP_ROUND_HALF_DOWN);
        $moyenne_tableau[] = $result;
    }
    var_dump($moyenne_tableau);

    $moyenneTotal = array_sum($moyenne_tableau) / count($moyenne_tableau);
    $results = (float)round($moyenneTotal, 1, PHP_ROUND_HALF_DOWN);
    echo $results;
}
echo moyenne($notes);

