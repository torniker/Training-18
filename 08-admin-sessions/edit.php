<?php
session_start();
include 'helpers.php';
checkAdmin();
if (!empty($_POST)) {
    if (!empty($_POST['id']) && !empty($_POST['name']) && !empty($_POST['title']) && !empty($_POST['body'])) {
        $nav = parseCSVFile('nav.txt', [0 => 'id', 2 => 'name']);
        $navStr = '';
        foreach ($nav as $item) {
            if ($item['id'] == $_GET['page']) {
                $navStr .= $_POST['id'].','.date('Y-m-d H:i:s').','.$_POST['name']."\n";
            } else {
                $navStr .= $item['id'].','.date('Y-m-d H:i:s').','.$item['name']."\n";
            }
        }
        file_put_contents('nav.txt', trim($navStr));
        $cont = parseCSVFile('content.txt', ['id', 'title', 'body', 'type']);
        $contStr = '';
        foreach ($cont as $item) {
            if ($item['id'] == $_GET['page']) {
                $contStr .= $_POST['id'].','.$_POST['title'].','.$_POST['body'].",text\n";
            } else {
                $contStr .= $item['id'].','.$item['title'].','.$item['body'].",text\n";
            }
        }
        file_put_contents('content.txt', trim($contStr));
        echo 'update';
    } else {
        echo 'Error';
    }
}

$navigation = parseCSVFile('nav.txt', [0 => 'id', 2 => 'name'], 0);
$content = parseCSVFile('content.txt', [1 => 'title', 2 => 'body', 3 => 'type'], 0);
$navItem = $navigation[$_GET['page']];
$contItem = $content[$_GET['page']];
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
<form action="edit.php?page=<?=$_GET['page']?>" method="post">
    <fieldset>
        <legend>Nav</legend>
        <label>
            <span>ID:</span>
            <input type="text" name="id" value="<?=$navItem['id']?>">
        </label>
        <label>
            <span>Name:</span>
            <input type="text" name="name" value="<?=$navItem['name']?>">
        </label>
        <label>
            <span>Title:</span>
            <input type="text" name="title" value="<?=$contItem['title']?>">
        </label>
        <label>
            <span>Body:</span>
            <input type="text" name="body" value="<?=$contItem['body']?>">
        </label>
        <label>
            <span></span>
            <input type="submit" value="Save">
        </label>
    </fieldset>
</form>
