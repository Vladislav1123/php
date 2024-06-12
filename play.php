<?php

$myArray = array (
    'name' => 'John Doe',
    'email' => 'john.doe@example.com',
    'age' => rand(18, 60), // Random age between 18 and 60
    'test' => 'Test field',
    'country' => 'USA',
    'interests' => ['coding', 'music', 'sports'],
    'apple' => 'MacOS',
);

/*
function printWitchForeach (array $myArray){
    foreach ($myArray as $key => $value) {
        if (is_array($value)) {
            echo implode(', ', $value);
            continue;
        }
        echo $key . ' ' . $value . '<br>';
    }
}

printWitchForeach($myArray);
*/

function printFor($myArray){
    for ($i = 0 ; $i < array($myArray); $i++){
        echo $myArray [$i] . '<br>';

    }
}

printFor($myArray);