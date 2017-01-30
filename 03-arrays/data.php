<?php
$nav = [
    ['id' => 'home', 'name' => 'Home', 'type' => 'text'],
    ['id' => 'about', 'name' => 'About', 'type' => 'text'],
    ['id' => 'blog', 'name' => 'Blog', 'type' => 'list'],
    ['id' => 'contact', 'name' => 'Contact', 'type' => 'text'],
];
$content = [
    'home'    => ['title' => 'Home Page', 'body' => 'home page content'],
    'about'   => ['title' => 'About Us', 'body' => 'About content'],
    'blog'    => [
        'title' => 'Blog',
        'list'  => [
            ['title' => 'sadf', 'body' => 'asfsd'],
            ['title' => 'sadf', 'body' => 'asfsd'],
            ['title' => 'sadf', 'body' => 'asfsd'],
            ['title' => 'sadf', 'body' => 'asfsd'],
        ],
    ],
    'contact' => ['title' => 'Contact', 'body' => 'Contact content'],
];
