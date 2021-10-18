<?php include 'server-info.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>System Info</title>
</head>
<body>
    <div class="container">
        <h1>Server Info</h1>

        <?php if($server): ?>
        <ul class="list-group">
            <?php foreach($server as $key => $value): ?>
                <li class="list-group-item">
                    <strong><?php echo $key ?>: </strong><?php echo $value ?>
                </li>
            <?php endforeach ?>
        </ul>
        <?php endif; ?>
    </div>
</body>
</html>