<?php
$myArray =[
['First_name'=>"Abror",'Last_name'=>'Orinov'],
['First_name'=>'Islom','Last_name'=>'Saidabdullayev']
];
// for($int=0; $int<2; $int++)
// {
//     echo $int;    
// }
foreach($myArray as $array){
    echo $array['First_name']."   Faliliyasi: ".$array['Last_name'];
    echo'<br>';
}
