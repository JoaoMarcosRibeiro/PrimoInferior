<?php 

function PrimoInferior($num)
{
    if($num < 0){
        return 0;
    }
    $primos = [];
    for ($i=1; $i < $num ; $i++) { 
        $divisores = 0;
        for ($a=2; $a <= $i; $a++) { 
            if($i % $a == 0){
                $divisores+=1;
            }
        }
        if($divisores==1){
            array_push($primos, $i);
        }
    }
    return max($primos);
}
?>