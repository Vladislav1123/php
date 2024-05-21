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

while (true) {
    $personalInformation['last_name'] = readline('Enter your last name: ');
    if (empty($personalInformation['last_name'])) {
        echo 'Last name cannot be empty' . PHP_EOL;
    } else {
        break;
    }
}

