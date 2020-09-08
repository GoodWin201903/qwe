<?php

session_start();

require_once 'db.php';

$user=$_POST['name'];
$pass= $_POST['password'];

$stmt= $pdo->query('SELECT * FROM `reg` WHERE  `name` ="'.$user.'"');

$result=$stmt->fetch();

if (md5($pass)==$result['password']){
}
else {
    echo ("Не нашел");
    include "auth.html";
}

include "ayth_users.html";
exit();
?>
