<?php
function Carre($nb)
  {
  return $nb. ’<sup>2 sup> =’. $nb * $nb ;
  }
 
  for ($i= 1; $i < 31 ; $i++)
  echo ’<li>’. Carre($i) . "\n";
?>