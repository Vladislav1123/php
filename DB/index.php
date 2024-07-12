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
    </tr>
    <?php foreach ($users as $user) { ?>
        <tr>
            <td> <?= $user['id'] ?> </td>
            <td> <?= $user ['first_name'] ?> </td>
            <td> <?= $user ['last_name'] ?> </td>
        </tr>
    <?php } ?>
</table>
</body>
</html>


