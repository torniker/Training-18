<!DOCTYPE html>
<html>
<head>
    <title><?php echo 'title'; ?></title>
</head>
<body>

<table cellpadding="0" cellspacing="0">
<?php
$i = 0;
for ($r = 0; $r < 8; $r++) {
    echo '<tr>';
    for ($i = 0; $i < 8; $i++) {
        $total = $i + $r;
        if ($total % 2) {
            echo '<td style="background:#ccc; width: 35px; height: 35px;">'.$total.'</td>';
        } else {
            echo '<td style="background:red; width: 35px; height: 35px;">'.$total.'</td>';
        }
    }
    echo '</tr>';
}
?>
</table>
</body>
</html>
