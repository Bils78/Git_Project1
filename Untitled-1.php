<?php
    function nbcarre($nombre)
    {
        return $nombre*$nombre;
        }
    for ($i = 1; $i < 31 ; $i++)
        echo "<li>" . nbcarre($i) . "</li>\n";
?>