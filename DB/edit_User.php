<?php

global $first_name, $last_name;
require "mysql.php";

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $userId = (int)$_GET['id'];

    $connection = createMysqlConnection();

    dataExtraction($userId);
    $user = dataExtraction($userId);

} else {
    echo " Відсутній ID користувача.";
    exit;
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
    <style>
        h2{
            color: tan;
        }
        body{
            text-align: center;
            background-image: url("https://kartinki.pics/pics/uploads/posts/2022-08/1659713827_1-kartinkin-net-p-sero-chernaya-abstraktsiya-krasivo-1.png");
            background-size: cover;
            background-repeat: no-repeat;
        }
        label {
            display: block;
            margin-top: 10px;
            color: tan;
        }
        input{
            background-color: lightyellow;
        }
    </style>
</head>
<body>

<h2>Редагувати користувача</h2>

<form action="update_User.php" method="post">
    <input type="hidden" name="id" value="<?= htmlspecialchars($userId) ?>">
    <label for="first_name">First Name:</label>
    <input type="text" id="first_name" name="first_name" value="<?= htmlspecialchars($user['first_name']) ?>" required>
    <br>
    <label for="last_name">Last Name:</label>
    <input type="text" id="last_name" name="last_name" value="<?= htmlspecialchars($user['last_name']) ?>" required>
    <br><br>
    <input type="submit" value="Update User">
</form>

</body>
</html>

