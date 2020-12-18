<?php

echo "Kalendar";

echo '<br>';


function month($name, $finalDay)
{

    echo $name, '<br>';

    for( $i=1; $i<=28; $i++)
    {
        echo $i;
    }
    if( $finalDay > 28)
    {
        echo 29;
        echo 30;
    }
    if( $finalDay == 31)
    {
        echo 31;
    }
}

echo month("yanvar", 30);

echo '<br>';

echo month("fevral", 28);

echo '<br>';

echo month("mart", 31);

echo '<br>';

echo month("aprel", 30);

echo '<br>';

echo month("may", 31);

echo '<br>';

echo month("iyun", 31);

echo '<br>';

echo month("iyul", 30);

echo '<br>';

echo month("avgust", 31);

echo '<br>';

echo month("sentabr", 31);

echo '<br>';

echo month("oktabr", 30);

echo '<br>';

echo month("noyabr", 31);

echo '<br>';

echo month("dekabr", 31);

?>

