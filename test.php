<?php

require 'tools.php';

$personalInformation = [
    "Last Name: " => 'testLastName',
    "First Name: " => 'testFirstName',
    "Email Address: " => 'testEmailAddress',
    "Company: " => 'testCompany',
    "Physical Address: " => 'testPhysicalAddress',
    "Date of Birth: " => 'testDateOfBirth',
    "last_name", 'lastName',
];

$keys = array_keys($personalInformation);
$length = count($personalInformation);

for ($i = 0; $i < $length; $i++) {
    $key = $keys[$i];
    $value = $personalInformation[$key];
    echo $key . ' ' . $value . PHP_EOL;
}
