<?php
session_start();
$username = 'admin';
$password = '123';

if (!empty($_POST)) {
    if (
        !empty($_POST['username'])
        && !empty($_POST['password'])
        && $_POST['username'] == $username
        && $_POST['password'] == $password
    ) {
        $_SESSION['admin'] = true;
        header('Location: admin.php');
    } else {
        echo 'user not found';
    }
}
?>
<style type="text/css">
    label {
        display: block;
        margin: 10px 0;
    }
    label span {
        display: inline-block;
        width: 80px;
    }
    label input {
        width: 300px;
        padding: 5px;
        border: 1px #454545 solid;
    }
</style>
<form action="login.php" method="post">
    <fieldset>
        <legend>Auth</legend>
        <label>
            <span>Username:</span>
            <input type="text" name="username" value="">
        </label>
        <label>
            <span>Password:</span>
            <input type="password" name="password" value="">
        </label>
        <label>
            <span></span>
            <input type="submit" value="Login">
        </label>
    </fieldset>
</form>
