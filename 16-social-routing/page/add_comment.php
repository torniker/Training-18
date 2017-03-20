<?php
$body = mysqli_real_escape_string($link, $_POST['body']);
$created_at = date('Y-m-d H:i:s');
$user_id = mysqli_real_escape_string($link, $_SESSION['user_id']);
$post_id = mysqli_real_escape_string($link, $_POST['post_id']);
$query = sprintf('INSERT INTO comments (body, created_at, user_id, post_id) VALUES ("%s","%s","%s","%s")', $body, $created_at, $user_id, $post_id);
mysqli_query($link, $query);
header('Location: index.php?page=feed');
