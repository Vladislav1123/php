<?php

require 'mysql.php';

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $userId = (int)$_GET['id'];

    deleteUser($userId);

    header('Location: index.php');
    exit();
} else {
    echo "Некоректний ID користувача.";
    exit();
}
