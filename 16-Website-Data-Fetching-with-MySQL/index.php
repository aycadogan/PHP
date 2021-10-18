<?php

    require('config/db.php');

    //Create Query
    $query = 'SELECT * FROM posts';

    //Get results
    $result = mysqli_query($conn, $query);

    //Fetch data
    $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
    //var_dump($posts);
    //Now, the data is inside of posts

    //House-keeping
    mysqli_free_result($result);
    mysqli_close($conn);

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="https://bootswatch.com/5/darkly/bootstrap.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">PHPBlog</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link" href="<?php echo ROOT_URL; ?>">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo ROOT_URL; ?>addpost.php">Add Post</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <h1>Posts</h1>

        <?php foreach($posts as $post): ?>
        <div class="well">
            <h3><?php echo $post['title'] ?></h3>
            <small>Created by <?php echo $post['author'] ?></small>
            <p><?php echo $post['body'] ?></p>
        </div>


        <?php endforeach ?>
    </div>
</body>
</html>