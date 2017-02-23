<?php
include 'helpers.php';

if (!isset($_COOKIE['visited'])) {
    $views = file_get_contents('views.txt');
    file_put_contents('views.txt', $views + 1);
    setcookie('visited', 'namkofia', time() + 60 * 60 * 24);
}
$cont = parseCSVFile('content.txt', [1 => 'title', 2 => 'body', 3 => 'type'], 0);
$nav = parseCSVFile('nav.txt', ['id', 'date', 'name', 'views'], 0);
if (isset($_GET['page']) && isset($cont[$_GET['page']])) {
    $navStr = '';
    foreach ($nav as $item) {
        if ($item['id'] == $_GET['page']) {
            $views = $item['views'] = $item['views'] + 1;
        }
        $navStr .= $item['id'].','.$item['date'].','.$item['name'].','.$item['views']."\n";
    }
    file_put_contents('nav.txt', trim($navStr));
}
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
    echo $cont[$key]['body'].'<br>';
    echo $views;
}
?>