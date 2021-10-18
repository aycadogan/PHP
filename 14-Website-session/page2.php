<?php

    session_start();

    //var_dump($_SESSION);
    $name = $_SESSION['name'];
    $email = $_SESSION['email'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Thank you <?php echo $name ?></h3>
    <p>You have subscried with email<?php echo $email ?></p>
    <a href="page3.php">GO TO PAGE 3</a>
</body>
</html>