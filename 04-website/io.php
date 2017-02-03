<?php
$dataStr = file_get_contents('data.txt');
// echo $dataStr;
$nav = [];
$rows = explode("\n", $dataStr);

// $i = 0;
foreach ($rows as $row) {
    $cols = explode(',', $row);
    // echo '0: '.$cols[0].'<br>';
    // echo '1: '.$cols[1].'<br><br><br>';
    // $nav[$i]['id'] = $cols[0];
    // $nav[$i]['name'] = $cols[1];
    // $i++;
    $nav[] = [
        'id'   => $cols[0],
        'name' => $cols[1],
    ];
}
print_r($nav);
// $nav[0]['id'] = 'home';
// $nav[0]['name'] = 'Home';
// $nav[1]['id'] = 'about';
// $nav[1]['name'] = 'About Us';

// $nav = [
//     ['id' => 'home', 'name' => 'Home'],
//     ['id' => 'about', 'name' => 'About'],
//     ['id' => 'blog', 'name' => 'Blog'],
//     ['id' => 'contact', 'name' => 'Contact'],
// ];
// $nav[0]['id']
