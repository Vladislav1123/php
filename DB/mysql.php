<?php


function createMysqlConnection(): mysqli
{
    $host_name = '127.0.0.1';
    $user_name = 'root';
    $password = '';
    $DB_name = 'testB';

    $connection = new mysqli($host_name, $user_name, $password, $DB_name);

    if($connection->connect_error){
        throw new \Exception('connection failed: ' .  $connection->connect_error);
        die();
    }

    return $connection;
}

function getUsersList()
{
    $connection = createMysqlConnection();
    $query = 'select id, first_name, last_name from  users';
    $result = $connection->query($query);
    $users = [];
    if($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()){
            $users[] = $row;
        }
    }
   return $users;
}

