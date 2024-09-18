<!DOCTYPE html>
<html>
<head>
    <title> Mysql Project </title>
    <style>
        table{
            width: 100%;
            border-collapse: collapse;
            text-align: center;
            table, th, td {
                border: 1px solid black;
            }
            th, td {
                padding: 10px;
                background-color: gray;
            }
        }
    </style>
</head>
<body>

<?php

require "mysql.php";
$users = getUsersList();

?>

<table>
    <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Update user</th>
        <th>Delete user</th>
    </tr>
    <?php foreach ($users as $user) { ?>
        <tr>
            <td> <?= $user['id'] ?> </td>
            <td> <?= $user ['first_name'] ?> </td>
            <td> <?= $user ['last_name'] ?> </td>
            <td><a href="edit_User.php?id=<?= $user['id'] ?>">Update the user </a></td>
            <td><a href="delete_user.php?id=<?= $user['id'] ?>" onclick="return confirm('Ви впевнені, що хочете видалити користувача?');">Видалити користувача</a></td>
        </tr>
    <?php } ?>
</table>
<a href="create_User.php"> Create User </a>
</body>
</html>

