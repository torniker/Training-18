<?php

$jsonStr = '[{"date": "2017-02-12","temp": 5,"unit": "celsius"},{"date": "2017-02-12","temp": 5,"unit": "celsius"}]';

$jsonArr = json_decode($jsonStr, true);

print_r($jsonArr);

$arr = [
    ['name' => 'sdfsda', 'present' => true],
    ['name' => '1232313', 'present' => false],
];

echo json_encode($arr);
