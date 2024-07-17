<!DOCTYPE html>
<html>
<head>
    <title>Create New User</title>
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
<h2>Create New User</h2>
<form action="mysql.php" method="post">
    <label for="first_name">First Name:</label>
    <input type="text" id="first_name" name="first_name" required>

    <label for="last_name">Last Name:</label>
    <input type="text" id="last_name" name="last_name" required>

    <br><br>
    <input type="submit" value="Create User">
</form>
</body>
</html>

