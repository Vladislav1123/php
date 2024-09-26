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

    function getUsersList($search = '')
    {
    $connection = createMysqlConnection();

    if ($search) {
        $query = "SELECT id, first_name, last_name FROM users WHERE first_name LIKE ?";
        $stmt = $connection->prepare($query);
        $searchTerm = "%" . $search . "%"; // Додаємо символи для пошуку
        $stmt->bind_param("s", $searchTerm);
    } else {
        $query = "SELECT id, first_name, last_name FROM users";
        $stmt = $connection->prepare($query);
    }

    $stmt->execute();
    $result = $stmt->get_result();

    $users = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $users[] = $row;
        }
    }

    $stmt->close();
    $connection->close();

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

    function deleteUser($userId)
{
         $connection = createMysqlConnection();

            $query = "DELETE FROM users WHERE id = ?";
            $stmt = $connection->prepare($query);
             $stmt->bind_param("i", $userId);
             $stmt->execute();

             if ($stmt->affected_rows > 0) {
               echo "Користувача успішно видалено.";
             } else {
              echo "Не вдалося видалити користувача.";
         }

        $stmt->close();
        $connection->close();
}

?>
