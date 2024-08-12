<?php

$my_array = array (
    "Last Name " => 'Vladislav',

    "First Name " => 'Moiseienko',

    "Hobbies" => 'Sport'

);

/*
foreach($my_array as $key => $value){
    echo "$key : $value <br> ";
}
*/


/*
reset($my_array);

while (key($my_array) !== null){
    $key = key($my_array);
    $value = current($my_array);

    echo " $key - $value <br> ";

    next($my_array);

}
*/


/*
do{ $key = key($my_array);
    $value = current($my_array);

    echo " $key : $value <br> ";

    next($my_array);
}
while(key($my_array) !== null);
*/

$keys = array_keys($my_array);

for($i = 0; $i < count($keys); $i++){
    $key = $keys[$i];
    $value = $my_array[$key];

    echo "$key - $value <br>";
}
