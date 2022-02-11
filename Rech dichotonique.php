<?php 


function affiche($tab){
    for ($j=0;$j<count($tab);$j++){
        echo $tab[$j]. " ";
    }
    echo "<br/>";
}


$tableau = array (1,3,56,76,55,43,21);
$nbtableau= array_sum($tableau);
affiche($tableau);

for ($j=0;$j<count($tableau);$j++){
    $pos = $j;
    $tableau[$pos]=$tableau[$j];
    

    //$pos=4;
    //$tableau[$pos]=55;
    
    for($i= $pos-1;$i>=0;$i--){

        if ($tableau[$pos]<$tableau[$i]){
            $temp=$tableau[$pos];
            $tableau[$pos]=$tableau[$i];
            $tableau[$i]=$temp;
            $pos--;
            
        }
        else{

                break;
            }


    }
    affiche($tableau);

}

?>