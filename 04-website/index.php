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
if (isset($_GET['page']) && isset($content[$_GET['page']])): ?>
<?php
// $data = $content[$_GET['page']];
$data = [
    'title' => 'Blog',
    'list'  => [
        ['title' => 'sadf 1', 'body' => 'asfsd'],
        ['title' => 'sadf 2', 'body' => 'asfsd'],
        ['title' => 'sadf 3', 'body' => 'asfsd'],
        ['title' => 'sadf 4', 'body' => 'asfsd'],
    ],
    'type'  => 'list',
];

// foreach ($nav as $v) {
//     if ($v['id'] == $_GET['page']) {
//         $type = $v['type'];
//     }
// }
?>
		<h1><?=$data['title']?></h1>
		<?php if ($data['type'] == 'text'): ?>
		<p><?=$data['body']?></p>
		<?php elseif ($type == 'list'): ?>
		<ul>
		<?php foreach ($data['list'] as $item): ?>
			<li><?=$item['title']?></li>
		<?php endforeach;?>
		</ul>
	<?php endif;?>
<?php else: ?>
    <h2>404</h2>
<?php endif;?>