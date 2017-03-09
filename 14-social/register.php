<?php
session_start();
include 'connect.php';
if (!empty($_POST['username']) && !empty($_POST['password'])) {
    $username = mysqli_real_escape_string($link, $_POST['username']);
    $password = mysqli_real_escape_string($link, $_POST['password']);
    $query = 'INSERT INTO users (username, password) VALUES ("'.$username.'", "'.md5($password).'")';
    mysqli_query($link, $query);
    header('Location: login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>რეგისტრაცია</title>
</head>
<body>
    <?php include 'nav.php';?>
    <form action="" method="post">
        სახელი: <input type="text" name="username">
        პაროლი: <input type="password" name="password">
        <button type="submit">რეგისტრაცია</button>
    </form>
</body>
</html>
