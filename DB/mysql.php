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

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $first_name = $_POST['first_name'] ?? '';
    $last_name = $_POST['last_name'] ?? '';

    function storeUser( $first_name , $last_name )
    {
        $connection = createMysqlConnection();
        $stmt = $connection->prepare("INSERT INTO users (first_name, last_name) VALUES (?, ?)");
        $stmt->bind_param('ss', $first_name, $last_name);

        if ($stmt->execute()) {
            header('Location: index.php');
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
        $connection->close();
        exit();
    }
}

?>
