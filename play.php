<?php

$myArray = array(
    "Last Name: " => 'testLastName',
    "First Name: " => 'testFirstName',
    "Email Address: " => 'testEmailAddress',
    "Company: " => 'testCompany',
    "Physical Address: " => 'testPhysicalAddress',
    "Date of Birth: " => 'testDateOfBirth',
    "last_name", 'lastName',
);

function printwhile (array $myArray){
    foreach ($myArray as $key => $value) {
        echo $key . ' ' . $value . '<br>';
    }
}

printwhile($myArray);

var_dump($myArray);


/*
function printDoWhile(array $myArray){
    foreach ($myArray as $key => $value){
        echo $key . '' . $value . '<br>';
    }
}

printDoWhile($myArray);

var_dump($myArray);
*/

/*
function printFor(array $myArray){
    foreach ($myArray as $key => $value){
        echo $key . '' . $value . '<br>';
    }
}

printFor($myArray);

var_dump($myArray);
*/