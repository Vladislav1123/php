<?php

require 'tools.php';

    $myArray = array(
        "Last Name: " => 'testLastName',
        "First Name: " => 'testFirstName',
        "Email Address: " => 'testEmailAddress',
        "Company: " => 'testCompany',
        "Physical Address: " => 'testPhysicalAddress',
        "Date of Birth: " => 'testDateOfBirth',
        "last_name", 'lastName',
        );

printArray($assoc_array);
printWithWhile($assoc_array);
printWithDoWhile($assoc_array);
printWithFor($assoc_array);
myLocalFunction();
myGlobalFunction();
printArrayGlobal($assoc_array);

?>

