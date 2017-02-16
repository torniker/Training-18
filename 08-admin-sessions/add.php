<?php
session_start();
include 'helpers.php';
checkAdmin();
if (!empty($_POST)) {
    if (!empty($_POST['id']) && !empty($_POST['name']) && !empty($_POST['title']) && !empty($_POST['body'])) {
        $navStr = "\n".$_POST['id'].','.date('Y-m-d H:i:s').','.$_POST['name'];
        file_put_contents('nav.txt', $navStr, FILE_APPEND);
        $contStr = "\n".$_POST['id'].','.$_POST['title'].','.$_POST['body'].',text';
        file_put_contents('content.txt', $contStr, FILE_APPEND);
        echo 'saved';
    } else {
        echo 'Error';
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
        width: 60px;
    }
    label input {
        width: 300px;
        padding: 5px;
        border: 1px #454545 solid;
    }
</style>
<form action="add.php" method="post">
    <fieldset>
        <legend>Nav</legend>
        <label>
            <span>ID:</span>
            <input type="text" name="id">
        </label>
        <label>
            <span>Name:</span>
            <input type="text" name="name">
        </label>
        <label>
            <span>Title:</span>
            <input type="text" name="title">
        </label>
        <label>
            <span>Body:</span>
            <input type="text" name="body">
        </label>
        <label>
            <span></span>
            <input type="submit" value="Save">
        </label>
    </fieldset>
</form>
