<?php
$user_id = mysqli_real_escape_string($link, $_SESSION['user_id']);
$post_id = mysqli_real_escape_string($link, $_GET['post_id']);
$getrank = mysqli_real_escape_string($link, $_GET['rank']);
if ($getrank > 0) {
    $rank = 1;
} else if ($getrank < 0) {
    $rank = -1;
} else {
    header('Location: '.$_SERVER['HTTP_REFERER']);
}

$query = sprintf('SELECT * FROM posts_ranking WHERE user_id = %s AND post_id = %s', $user_id, $post_id);
$res = mysqli_query($link, $query);
$ranking = mysqli_fetch_assoc($res);
if ($ranking) {
    $query = sprintf('DELETE FROM posts_ranking WHERE user_id = %s AND post_id = %s', $user_id, $post_id);
} else {
    $query = sprintf('INSERT INTO posts_ranking (user_id, post_id, rank) VALUES ("%s","%s","%s")', $user_id, $post_id, $rank);
}
mysqli_query($link, $query);
header('Location: '.$_SERVER['HTTP_REFERER']);
