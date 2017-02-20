<?php
// session_start();
// $_SESSION
// $_COOKIE
// $_SERVER
// echo time();
setcookie('foo', 'bar', time() + 3600);
echo $_COOKIE['foo'];
// print_r($_SERVER['REMOTE_ADDR']);
