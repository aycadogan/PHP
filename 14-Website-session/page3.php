<?php

    session_start();
    //$name = $_SESSION['name'];

    $name = isset($_SESSION['name']) ? $_SESSION['name'] : 'Guest';
    $email = isset($_SESSION['email']) ? $_SESSION['email'] : 'Not Subscribed';
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <h1>
        Hello, <?php echo $name ?> (<?php echo $email ?>)
    </h1>
    <a href="page4.php">Logout</a>
</body>
</html>