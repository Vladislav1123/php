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


$result = $connection->query($query);
/*
while($row = $result->fetch_assoc()){
   var_dump($row);
}
*/

global $result, $connection;

$query = 'SELECT id, first_name, last_name FROM users';
$result = $connection->query($query);


if($result->num_rows > 0) {
    echo '<table>';
    echo '<tr><th>ID</th><th>First Name</th><th>Last Name</th></tr>';

    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $row['id'] . '</td>';
        echo '<td>' . $row['first_name'] . '</td>';
        echo '<td>' . $row['last_name'] . '</td>';
        echo '</tr>';
    }
    echo '</table>';
}
else {
    echo 'No results found.';
}
$connection->close();
?>

