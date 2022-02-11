<?php
$n=10;

        for($col=1;$col<$n;$col++)
        {
            if($ligne==1 || $col==1)
                $cellule ="th";
            else
                $cellule ="td";
            echo "<$cellule>";
            if(($ligne!=1) and ($ligne==$col))

                echo "<strong>";
            if($ligne!=1 || $col!=1)
                echo $ligne*$col;
            if(($ligne!=1) and ($ligne==$col))
                echo "</strong>";
            echo "</$cellule>";
            }
            echo "</tr>\n";
            
        ?>