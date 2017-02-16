<?php
include 'helpers.php';
$nav = parseCSVFile('nav.txt', [0 => 'id', 2 => 'name']);
$cont = parseCSVFile('content.txt', [1 => 'title', 2 => 'body', 3 => 'type'], 0);
?>
<ul>
    <?php foreach ($nav as $item): ?>
    <li><a href="index.php?page=<?=$item['id']?>"><?=$item['name']?></a></li>
    <?php endforeach;?>
</ul>
<?php
if (isset($_GET['page']) && isset($cont[$_GET['page']])) {
    $key = $_GET['page'];
    echo '<h1>'.$cont[$key]['title'].'</h1>';
    echo $cont[$key]['body'];
}
?>