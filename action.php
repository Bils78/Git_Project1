Bonjour, <?php echo ($_POST['prenom']); echo("&nbsp"); echo ($_POST['nom']);echo ("&nbsp") ?>
Nous avons bien noté que vous habitez <?php echo ($_POST["adresse"]);?> à <?php echo ($_POST["ville"]);?>
(<?php echo ($_POST["codep"]);?>)

Tu as <?php echo (int)$_POST['age']; ?> ans.