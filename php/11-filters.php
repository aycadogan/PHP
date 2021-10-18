<?php


//check for posted data
// if(filter_has_var(INPUT_POST,'data')){
//     echo 'Data found';
// }else {
//     echo 'No data';
// }

if(filter_has_var(INPUT_POST,'data')){

    $email = $_POST['data'];

    //remove illegal chars
    $sanitized_email = filter_var($email, FILTER_SANITIZE_EMAIL);

    //to validate an email
    //    if(filter_input(INPUT_POST,'data',FILTER_VALIDATE_EMAIL)){
    //        echo 'Email is valid';
    //    }else{
    //        echo 'email is not valid';
    //    }

    if(filter_var($sanitized_email, FILTER_VALIDATE_EMAIL)){
        echo 'Email is valid';
    }else{
        echo 'email is not valid';
    }

    }else {
        echo 'No data';
    }

    echo '<br>';

    /*
        FILTER_VALIDATE_BOOLEAN
        FILTER_VALIDATE_EMAIL
        FILTER_VALIDATE_FLOAT
        FILTER_VALIDATE_INT
        FILTER_VALIDATE_IP
        FILTER_VALIDATE_REGEXP
        FILTER_VALIDATE_URL
        
        FILTER_SANITIZE_EMAIL
        FILTER_SANITIZE_URL
        FILTER_SANITIZE_NUMBER_INT
        FILTER_SANITIZE_NUMBER_FLOAT
        FILTER_SANITIZE_STRING
        
    */

    /**
     * FILTER_VALIDATE_INT applies to numeric strings too
     * 
     * "A PHP string is considered numeric if it can be interpreted as an int or a float."
     * Source: https://www.php.net/manual/en/language.types.numeric-strings.php
     * 
     * var_dump(filter_var('23', FILTER_VALIDATE_INT));
     * var_dump(filter_var(23, FILTER_VALIDATE_INT));
     */
?>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
    <input type="text" name="data">
    <input type="text" name="data2">
    <button type="submit">Submit</button>
</form>