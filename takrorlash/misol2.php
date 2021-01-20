<?php
$n=0;
for($i=100;$i<1000;$i++){
    $a=floor($i/100);
    $b=floor(($i%100)/10);
    $c=$i%100%10;
    if(($a*$b*$c)%($a+$b+$c)==0){
        echo $i, ", ";
        $n++;
    }
}
echo "<br>",$n;
?>