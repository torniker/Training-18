<?php
$nav = [
    ['id' => 'home', 'name' => 'Home', 'type' => 'text'],
    ['id' => 'about', 'name' => 'About', 'type' => 'text'],
    ['id' => 'blog', 'name' => 'Blog', 'type' => 'list'],
    ['id' => 'contact', 'name' => 'Contact', 'type' => 'text'],
];
$content = [
    'home'    => ['title' => 'Home Page', 'body' => 'home page content', 'type' => 'text'],
    'about'   => ['title' => 'About Us', 'body' => 'About content', 'type' => 'text'],
    'blog'    => [
        'title' => 'Blog',
        'list'  => [
            ['title' => 'sadf 1', 'body' => 'asfsd'],
            ['title' => 'sadf 2', 'body' => 'asfsd'],
            ['title' => 'sadf 3', 'body' => 'asfsd'],
            ['title' => 'sadf 4', 'body' => 'asfsd'],
        ],
        'type'  => 'list',
    ],
    'contact' => ['title' => 'Contact', 'body' => 'Contact content', 'type' => 'text'],
];
