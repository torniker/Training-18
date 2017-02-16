<?php
session_start();
include 'helpers.php';
checkAdmin();
$nav = parseCSVFile('nav.txt', [0 => 'id', 2 => 'name']);
?>

<a href="add.php">Add</a>
<ul>
    <?php foreach ($nav as $item): ?>
    <li><a href="edit.php?page=<?=$item['id']?>"><?=$item['name']?></a></li>
    <?php endforeach;?>
</ul>
