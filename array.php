<?php
$myArray =[
['First_name'=>"Abror",'Last_name'=>'Orinov'],
['First_name'=>'Islom','Last_name'=>'Saidabdullayev']
];
// print_r($myArray);

// for($int=0; $int<2; $int++)
// {
//     echo $int;    
//  echo '<br>';
//  }

 foreach($myArray as $array){
     echo $array['First_name']."   Faliliyasi: ".$array['Last_name'];
     echo'<br>';
 }

