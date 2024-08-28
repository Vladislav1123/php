<?php

require 'mysql.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $first_name = $_POST['first_name'] ?? '';
    $last_name = $_POST['last_name'] ?? '';

    try {
        storeUser($first_name, $last_name);
        header('Location: index.php ');
        exit();
    } catch (Exception $e) {
        echo 'Error: ' . $e->getMessage();
    }
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $first_name = $_POST['first_name'] ?? '';
    $last_name = $_POST['last_name'] ?? '';

    try {
        updateUser($first_name, $last_name);
        header('Location: index.php ');
        exit();
    } catch (Exception $e) {
        echo 'Error: ' . $e->getMessage();
    }
}
