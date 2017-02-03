<?php
$nav = [
    ['id' => 'home', 'name' => 'Home'],
    ['id' => 'about', 'name' => 'About'],
    ['id' => 'blog', 'name' => 'Blog'],
    ['id' => 'contact', 'name' => 'Contact'],
];

$content = [
    'home'    => ['title' => 'Home Page', 'body' => 'home page content', 'type' => 'text'],
    'about'   => ['title' => 'About Us', 'body' => 'About content', 'type' => 'text'],
    'blog'    => [
        'title' => 'Blog',
        'type'  => 'list',
        'sia'   => [
            ['title' => 'sadf 1', 'body' => 'asfsd'],
            ['title' => 'sadf 2', 'body' => 'asfsd'],
            ['title' => 'sadf 3', 'body' => 'asfsd'],
            ['title' => 'sadf 4', 'body' => 'asfsd'],
        ],
    ],
    'contact' => ['title' => 'Contact', 'body' => 'Contact content', 'type' => 'text'],
];

// $arr = ['key' => 'value', 'foo', 'foo' => 'baz', 'aaa' => ['aaa', 'bbb', [3, 1, 5, 71]]];
// echo $arr['aaa'][2][3];
// echo $arr[1][2][3];
// echo $arr[0];
// print_r($arr[1]);
// print_r($arr);
$content[$_GET['page']];
$nav_id = $_GET['page'];
$page = $content[$nav_id];
echo $page['title'];
if ($page['type'] == 'text') {
    echo $page['body'];
} else if ($page['type'] == 'list') {
    foreach ($page['sia'] as $item) {
        echo $item['title'].'<br>';
    }
}
