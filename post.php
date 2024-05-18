<?php

$assoc_array = array(

" Last Name: " => $_POST['last_name'] ,

 " First Name: " => $_POST['first_name'],

 " Email Address:" => $_POST['email_address'],

 " Company: " => $_POST['company'] ,

 " Physical Address: " => $_POST['physical_address'] ,

" Date of Birth: " => $_POST['date_of_birth'] ,
);
foreach ($assoc_array as $key => $value) {
    echo $key . ' ' . $value . '<br>';
}
?>