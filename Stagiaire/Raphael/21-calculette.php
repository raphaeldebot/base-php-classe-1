<?php
// $a = 0;
// $b = 0;
// $operateur = "";
$res = "";
function calculSimple($a,$operateur,$b) {
    if ($operateur === "+") {
        return $res = ($a + $b);
    } elseif ($operateur === "-") {
        return $res = ($a - $b);
    } elseif ($operateur === "*") {
        return $res = ($a * $b);
    } elseif ($operateur === "/") {
        return $res = ($a / $b);
    } elseif ($operateur === "/" && ($a == 0 || $a == 0)) {
        return $res = "Vous ne pouvez pas divisez par 0";
    } else {
        return $res = "Il y a un probleme";
    }
}

if (calculSimple(1,"+",6)) {
    echo " 1 + 2 =  {$res}";
}