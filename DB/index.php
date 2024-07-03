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
global $result, $connection;

$query = 'SELECT id, first_name, last_name FROM users';
$result = $connection->query($query);


if($result->num_rows > 0) {
    echo '<table>';
    echo '<tr><th>ID</th><th>First Name</th><th>Last Name</th></tr>';

    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $row['id'] . '</td>';
        echo '<td>' . $row['first_name'] . '</td>';
        echo '<td>' . $row['last_name'] . '</td>';
        echo '</tr>';
    }
    echo '</table>';
}
else {
       echo 'No results found.';
}
$connection->close();
?>

</body>
</html>


