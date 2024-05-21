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

reset($personalInformation);

do {
    $key = key($personalInformation);
    $value = current($personalInformation);
    echo $key . ' ' . $value . PHP_EOL;
} while (next($personalInformation) !== false);

