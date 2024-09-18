<?php

require 'mysql.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['id'], $_POST['first_name'], $_POST['last_name'])) {
        $userId = (int)$_POST['id'];
        $first_name = $_POST['first_name'] ?? '';
        $last_name = $_POST['last_name'] ?? '';

        try {
            updateUser($userId, $first_name, $last_name);
            header('Location: index.php ');
            exit();
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
}

