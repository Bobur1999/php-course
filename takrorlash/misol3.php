<?php
$a=$_POST['a'];
$n=$_POST['n'];
echo "x ni y darajaga ko`tarish=",  daraja($a,$n);
function daraja( $a, $n)
{
    echo pow($a,$n);
}
?>

<form action="misol3.php" method="post" >
<b>a=</b><input name="a" type="text"><br>
<b>n=</b><input name="n" type="text"><br>
<input type="Submit" value="Hisoblash">
</form>