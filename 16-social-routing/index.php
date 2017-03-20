<?php
session_start();
include 'inc/connect.php';
$content = '';
if (isset($_GET['page'])) {
    $filename = 'page/'.$_GET['page'].'.php';
    if (file_exists($filename)) {
        ob_start();
        include $filename;
        $content = ob_get_contents();
        ob_end_clean();
    } else {
        die('Not Found');
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>მთავარი</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <ul class="nav nav-pills">
            <li><a href="index.php">მთავარი</a></li>
            <?php if (!empty($_SESSION['username'])): ?>
                <li><a>გამარჯობა <?=$_SESSION['username']?></a></li>
                <li><a href="index.php?page=logout">წადი <?=$_SESSION['username']?></a></li>
            <?php else: ?>
            <li><a href="index.php?page=register">რეგისტრაცია</a></li>
            <li><a href="index.php?page=login">ავტორიზაცია</a></li>
            <?php endif;?>
        </ul>
    </div>
    <div class="row"><?php echo $content; ?></div>
</div>
</body>
</html>