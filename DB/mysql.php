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
?>


<!DOCTYPE html>
<html>
<head>
    <title>Create New User</title>
    <style>
        body{
            text-align: center;
        }
        label {
            display: block;
            margin-top: 10px;
        }
    </style>
</head>
<body>
<h2>Create New User</h2>
<form>
    <label for="first_name">First Name:</label>
    <input type="text" id="first_name" name="first_name" required>

    <label for="last_name">Last Name:</label>
    <input type="text" id="last_name" name="last_name" required>

    <br><br>
    <input type="submit" value="Create User">
</form>
</body>
</html>