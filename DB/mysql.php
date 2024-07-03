<?php

$host_name = '127.0.0.1';
$user_name = 'root';
$password = '';
$DB_name = 'testB';

$connection = new mysqli($host_name, $user_name, $password, $DB_name);

if($connection->connect_error){
    echo 'connection failed: ' .  $connection->connect_error ;
    die();
}
echo ' connected successfully ';


$query = 'select id, first_name, last_name from  users';


//$result = $connection->query($query);
//while($row = $result->fetch_assoc()){
   // var_dump($row);
//}


