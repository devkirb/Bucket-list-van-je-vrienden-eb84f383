<?php
echo "hoeveel wil je toevoegen\n";
$getal = readline();
if (!is_numeric($getal)){   
    echo "$getal is geen getal lol"; exit();
}
$vriend = array();
for ($x = 1; $x <= $getal; $x++) {
    echo "wats je naam\n";
    $keuze = readline();
    echo "wat is je droom\n";
    $ding2 = readline();
    $vriend [$ding] = $ding2;
}  
foreach ($vriend as $ding => $ding2){
    echo "$ding dit is je keuze:" . " $ding2\n";
}
