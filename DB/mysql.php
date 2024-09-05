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


     function dataExtraction ($userId)
     {
         $connection = createMysqlConnection();

         $query = "SELECT first_name, last_name FROM users WHERE id = ?";
         $stmt = $connection->prepare($query);
         $stmt->bind_param("i", $userId);
         $stmt->execute();
         $result = $stmt->get_result();

         if ($result->num_rows > 0) {
             $user = $result->fetch_assoc();
         } else {
             echo "Користувач не знайдений.";
             exit;
         }

         $stmt->close();
         $connection->close();
         return $user;

     }

    function updateUser($userId, $first_name , $last_name )
    {
        $connection = createMysqlConnection();

        $query = "UPDATE users SET first_name = ?, last_name = ? WHERE id = ?";
        $stmt = $connection->prepare($query);
        $stmt->bind_param("ssi", $first_name, $last_name, $userId);
         $stmt->execute();

        if ($stmt->affected_rows > 0) {
        echo "Дані користувача оновлено успішно.";
         } else {
         echo "Не вдалося оновити дані користувача.";
        }

    $stmt->close();
    $connection->close();
}

?>
