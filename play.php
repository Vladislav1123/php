<?php

$myArray = array(
    'name' => 'John Doe',
    'email' => 'john.doe@example.com',
    'age' => rand(18, 60), // Random age between 18 and 60
    'test' => 'Test field',
    'country' => 'USA',
    'interests' => ['coding', 'music', 'sports']
);


function printWitch (array $myArray){
    foreach ($myArray as $key => $value) {
        echo $key . ' ' . $value . '<br>';
    }
}

printWitch($myArray);

