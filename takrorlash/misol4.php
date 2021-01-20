<?php
function nol($a){
    $n=1;
    for($i=1;$i<$n+1;$i++){
        if($a%10==0){
            $a=$a/10;
            $n++;
        }
    }
    echo $n-1;
}
echo nol(1230000);
?>