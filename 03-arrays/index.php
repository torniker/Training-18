<?php
$students = [
    ['firstname' => 'misho', 'lastname' => 'makh', 'age' => 12],
    ['firstname' => 'vaja', 'lastname' => 'mela', 'age' => 10],
    ['firstname' => 'dsfas'],
];

for ($i = 0; $i < count($students); $i++) {
    echo $students[$i]['firstname'].' ';
}
echo '<br>';
foreach ($students as $s) {
    echo $s['firstname'].' ';
}
