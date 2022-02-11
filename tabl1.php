<!DOCTYPE html>

<html>

<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Table de multiplication modulo n</title>

<style>

table, td, th { border: 1px solid black; }

table { border-collapse: collapse; width:400px; }

td { text-align:center; }

</style>

</head>

<body>

<?php

/*

Formation de la table de multiplication

/

$m = 12;

echo '<p>Table de multiplication modulo '.$m.'</p>';

$tm = array();

for ($i=0; $i<$m; $i++) {

for ($j=0; $j<$m; $j++) {

$tm[$i][$j]=($i$j)%$m;

}

}

/*

Affichage de la table

*/

echo '<table><tbody>';
for ($i=0; $i<$m; $i++) {

echo '<tr>';

for ($j=0; $j<$m; $j++) {

echo '<td>'

.$tm[$i][$j]

.'</td>';

}

echo '</tr>';

}

echo '</tbody></table>';

?>

</body>

</html>
