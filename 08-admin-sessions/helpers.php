<?php

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

function checkAdmin()
{
    if (!isset($_SESSION['admin']) || !$_SESSION['admin']) {
        die('not authorized');
    }
    return true;
}
