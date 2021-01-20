<?php
$b=0;
$s=0;
for($i=10;$i<100;$i++){
    $a=$i%10;
    $b=$b+$a;
    $d=floor($i/10);
    $s=$s+$d;
} 
echo $b+$s;
?>