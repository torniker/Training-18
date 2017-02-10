<?php
// $navStr = file_get_contents('nav.txt');
// $rows = explode("\n", $navStr);
// $nav = [];
// foreach ($rows as $row) {
//     $cols = explode(',', $row);
//     $nav[] = [
//         'id'   => $cols[0],
//         'name' => $cols[1],
//     ];
// }
// $contStr = file_get_contents("content.txt");
// $rows = explode("\n", $contStr);
// $cont = [];
// foreach ($rows as $row) {
//     $cols = explode(',', $row);
//     $cont[$cols[0]] = [
//         'title' => $cols[1],
//         'body'  => $cols[2],
//         'type'  => $cols[3],
//     ];
// }

function parseCSVFile($filename, $headings, $keyCol = null, $rowSep = "\n", $colSep = ',')
{
    $str = file_get_contents($filename);
    $rows = explode($rowSep, $str);
    $arr = [];
    foreach ($rows as $row) {
        $cols = explode($colSep, $row);
        foreach ($cols as $k => $cell) {
            if (!isset($headings[$k])) {
                continue;
            }
            $tmp[$headings[$k]] = $cell;
        }
        if (is_null($keyCol)) {
            $arr[] = $tmp;
        } else {
            $arr[$cols[$keyCol]] = $tmp;
        }
    }
    return $arr;
}

$nav = parseCSVFile('nav.txt', [0 => 'id', 2 => 'name']);
$conts = parseCSVFile('content.txt', [1 => 'title', 2 => 'body', 3 => 'type'], 0);
?>
<ul>
    <?php foreach ($nav as $item): ?>
    <li><a href="index.php?page=<?=$item['id']?>"><?=$item['name']?></a></li>
    <?php endforeach;?>
</ul>
<?php
if (isset($_GET['page']) && isset($cont[$_GET['page']])) {
    $key = $_GET['page'];
    echo $cont[$key]['body'];
}
?>