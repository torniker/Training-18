<?php
include 'data.php';
?>
<ul>
    <?php foreach ($nav as $v): ?>
    <li><a href="website.php?page=<?=$v['id']?>"><?=$v['name']?></a></li>
    <?php endforeach;?>
</ul>
<?php
// home about blog contact
if (isset($_GET['page']) && isset($content[$_GET['page']])):
?>
    <h1><?=$content[$_GET['page']]['title']?></h1>
    <p><?=$content[$_GET['page']]['body']?></p>
<?php else: ?>
    <h2>404</h2>
<?php endif;?>