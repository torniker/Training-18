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
if (isset($_GET['username'])) {
    $username = mysqli_real_escape_string($link, $_GET['username']);
    $query = sprintf("SELECT posts.id, body, created_at, username, user_id FROM posts JOIN users ON posts.user_id = users.id WHERE users.username='%s' ORDER BY created_at DESC", $username);
} else {
    $query = "
        SELECT
            posts.id, body, created_at, username, user_id,
            (SELECT SUM(rank) as ranking FROM posts_ranking WHERE posts_ranking.post_id = posts.id and rank = 1) as positive_ranking,
            (SELECT SUM(rank) as ranking FROM posts_ranking WHERE posts_ranking.post_id = posts.id and rank = -1) as negative_ranking
        FROM
            posts JOIN users ON posts.user_id = users.id ORDER BY created_at DESC";
}
$res = mysqli_query($link, $query);
$posts = mysqli_fetch_all($res, MYSQLI_ASSOC);
?>
<?php include 'header.php';?>
    <form action="" method="post">
    <div class="container">
        <div class="row">
            <textarea class="form-control" name="body"></textarea>
        </div>
        <br>
        <div class="row">
            <button class="btn btn-default" type="submit">დაპოსტვა</button>
        </div>
        <hr>
    </div>
    </form>
    <div class="container">
        <div class="row">
            <div class="list-group">
            <?php foreach ($posts as $post): ?>
                <div class="list-group-item">
                    <a class="list-group-item-heading" href="index.php?username=<?=$post['username']?>"><?=$post['username']?></a>
                    <p class="list-group-item-text">
                        (<?=$post['created_at']?>) - <?=$post['body']?>
                        <strong><?=$post['positive_ranking']?></strong>
                        <strong><?=$post['negative_ranking']?></strong>
                        <a href="rank.php?post_id=<?=$post['id']?>&rank=1" class="btn btn-default btn-sm"><i class="glyphicon glyphicon-thumbs-up"></i></a>
                        <a href="rank.php?post_id=<?=$post['id']?>&rank=-1" class="btn btn-default btn-sm"><i class="glyphicon glyphicon-thumbs-down"></i></a>
                        <a href="index.php?reply_to_post=<?=$post['id']?>" class="btn btn-default btn-sm">Reply</a>
                    </p>
                    <?php
$query = sprintf("SELECT username, body, created_at FROM comments JOIN users ON comments.user_id = users.id WHERE post_id='%s' ORDER BY created_at ASC", $post['id']);
$res = mysqli_query($link, $query);
$comments = mysqli_fetch_all($res, MYSQLI_ASSOC);
?>
                    <ul>
                    <?php foreach ($comments as $comment): ?>
                        <li><strong><?=$comment['username']?>:</strong> <?=$comment['body']?></li>
                    <?php endforeach;?>
                    </ul>
                    <?php if (isset($_GET['reply_to_post']) && $_GET['reply_to_post'] == $post['id']): ?>
                        <form action="add_comment.php" method="post">
                            <input type="hidden" name="post_id" value="<?=$post['id']?>">
                            <div class="row">
                                <textarea class="form-control" name="body"></textarea>
                            </div>
                            <br>
                            <div class="row">
                                <button class="btn btn-default" type="submit">დაკომენტება</button>
                            </div>
                            <hr>
                        </form>
                    <?php endif;?>
                </div>
            <?php endforeach;?>
            </div>
        </div>
    </div>
</body>
</html>
