<?php

$loggedIn = true;

//regular if/else
if($loggedIn){
    echo 'You are logged in';
}else{
    echo 'You are NOT logged in';
}

//shorthand if/else
echo ($loggedIn) ? 'You are logged in' : 'You are NOT logged in';

$isRegistered = ($loggedIn == true) ? true : false;

?>

<div>
    <?php  if($loggedIn) { ?>
    <h1>Welcome User</h1>
    <?php } else { ?>
    <h1>Welcome Guest</h1>
    <?php } ?>
</div>

<div>
    <?php  if($loggedIn) : ?>
    <h1>Welcome User</h1>
    <?php  else : ?>
    <h1>Welcome Guest</h1>
    <?php endif; ?>
</div>

<ul>
    <?php for($i = 0; $i < 10; $i++): ?>
        <li><?php echo $i ?></li>
    <?php endfor; ?>
</ul>

<ul>
    <?php foreach($arr as $val): ?>
        <li><?php echo $val ?></li>
    <?php endforeach; ?>
</ul>