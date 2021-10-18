<?php

//----------GET-----------------
//echo $_GET['email'];
//if(isset($_GET['attribute name'])) --> first checks whether is this have a value
// if(isset($_GET['username'])){
//     //print_r($_GET);
//     // $name = $_GET['username'];
//     // $nameSecured = htmlentities($name); --> It won't work for the hackers
    
//     //Do this - To protect from hackers: (It becomes regular string)
//     $name = htmlentities($_GET['username']);
    
//     echo $name;
// }

//-----------POST-----------------

if(isset($_POST['username'])){

    // print_r($_POST);
    
    //do this
    $name = htmlentities($_POST['username']);
    
    //dont do this..
    // $name = $_POST['username'];
    // $nameSecured = htmlentities($name);

    echo $name;
}

//super global value
// $_REQUEST
// $_POST
// $_GET

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>My website</title>
</head>
<body>
    <form method="POST" action="08-get-post.php">
        <div>
            <label for="">Username</label>
            <input type="text" name="username">
        </div>
        <div>
            <label for="">Email</label>
            <input type="email" name="email">
        </div>
        <input type="submit" value="Submit">
    </form>
</body>
</html>