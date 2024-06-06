<?php

$myArray = array(
    'name' => 'John Doe',
    'email' => 'john.doe@example.com',
    'age' => rand(18, 60), // Random age between 18 and 60
    'country' => 'USA',
    'interests' => ['coding', 'music', 'sports']
);
foreach ($myArray as $key => $value) {
    echo $key . ' ' . $value . '<br>';
}


