<?php

//xdebug_break();
//phpinfo();
//die();
/*
$myArray = array (
    'name' => 'John Doe',
    'email' => 'john.doe@example.com',
    'age' => rand(18, 60), // Random age between 18 and 60
    'test' => 'Test field',
    'country' => 'USA',
    'interests' => ['coding', 'music', 'sports'],
    'apple' => 'MacOS',
);
*/
/*
function printWitchForeach(array $information){
    foreach ($information as $key => $value) {
        if (is_array($value)) {
            echo implode(', ', $value);
            continue;
        }
        echo $key . ' ' . $value . '<br>';
    }
}

printWitchForeach($myArray);
*/

//    for ($i = 0 ; $i < array($myArray); $i++) {

/*

function printFor($myArray) {
    $keys = array_keys($myArray);
    for ($i = 0 ; $i < count($myArray); $i++) {
        $key = $keys[$i];

        echo $myArray[$key] . '<br>';

    }
}
*/

//printFor($myArray);
/*
function printWhile($myArray)
{
    $keys = array_keys($myArray);
    $i = 0;
    while ($i < count($myArray)) {
        $key = $keys[$i];
        $value = $myArray[$key];
        if (is_array($value)) {
            $value = implode(", ", $value);
        }
        echo $key . ' ' . $value . '<br>';
        $i++;
    }
}
printWhile($myArray);
*/
/*
function printDoWhile($myArray)
{
    $keys = array_keys($myArray);
    $i = 0;

    if(count($keys) > 0){
        do{
            $key = $keys[$i];
            $value = $myArray[$key];
            if(is_array($value)){
                $value = implode(",", $value);
            }
            echo $key . ' ' . $value . '<br>';
            $i++;
        } while ($i < count($keys));
    } else{
        echo " Масив порожній ";
    }
}
printDoWhile($myArray);
*/
/*
$mySimpleArray = [85, 78, 92, 65, 74];

function printAverage($mySimpleArray)
{
    $sum = array_sum ($mySimpleArray);
    $count = count ($mySimpleArray);
    $average = $sum / $count;

    echo "$average" ;
}

printAverage($mySimpleArray);
*/

