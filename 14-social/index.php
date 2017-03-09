<?php
session_start();
include 'connect.php';
if (!empty($_POST['body'])) {
    $body = mysqli_real_escape_string($link, $_POST['body']);
    $created_at = date('Y-m-d H:i:s');
    $user_id = mysqli_real_escape_string($link, $_SESSION['user_id']);
    $query = sprintf('INSERT INTO posts (body, created_at, user_id) VALUES ("%s","%s","%s")', $body, $created_at, $user_id);
    mysqli_query($link, $query);
    header('Location: index.php');
}

$query = "SELECT body, created_at, username, user_id FROM posts JOIN users ON posts.user_id = users.id ORDER BY created_at DESC";
$res = mysqli_query($link, $query);
$posts = mysqli_fetch_all($res, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
    <title>მთავარი</title>
</head>
<body>
<?php include 'nav.php';?>
    <form action="" method="post">
        <textarea name="body"></textarea>
        <button type="submit">დაპოსტვა</button>
    </form>
    <ul>
    <?php foreach ($posts as $post): ?>
        <li><?=$post['username']?> (<?=$post['created_at']?>) - <?=$post['body']?></li>
    <?php endforeach;?>
    </ul>
</body>
</html>
