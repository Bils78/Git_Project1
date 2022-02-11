
<?php

$prenom=($_POST['prenom']);
$nom=($_POST['nom']);
$age=($_POST['age']);
$ville=($_POST['ville']);
$adresse=($_POST['adresse']);
$codep=($_POST['codep']);
echo '<a href="action3.php?nom='.$nom.'&prenom='.$prenom.'">Votre etat civil</a>';
echo '<a href="action4.php?ville='.$ville.'&adresse='.$adresse.'&codep='.$codep.'">votre adresse</a>'
?>