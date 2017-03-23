<?php
abstract class Base
{
    public $id;

    abstract public function getInsertSql(): string;
}

class User extends Base
{
    private $username;

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function getInsertSql(): string
    {
        return sprintf("INSERT INTO users (username) VALUES ('%s')", $this->username);
    }
}

class Post extends Base
{
    private $body, $user_id;

    public function __construct($id, $body, $user_id)
    {
        $this->id = $id;
        $this->body = $body;
        $this->user_id = $user_id;
    }

    public function getInsertSql(): string
    {
        return sprintf("INSERT INTO posts (body, user_id) VALUES ('%s', '%s')", $this->body, $this->user_id);
    }
}

class Db
{
    private $link;

    public function __construct()
    {
        $this->link = mysqli_connect('localhost', 'root', '', 'training');
        if (!$this->link) {
            die('Could not connect: '.mysqli_error());
        }
    }

    public function insert(Base $obj)
    {
        $query = $obj->getInsertSql();
        echo $query;
        mysqli_query($this->link, $query);
    }
}

if ($_POST['username']) {
    $user = new User;
    $user->setUsername($_POST['username']);

    $db = new Db;
    $db->insert($user);
}

// $query = "
//         SELECT
//             posts.id, body, created_at, username, user_id,
//             (SELECT SUM(rank) as ranking FROM posts_ranking WHERE posts_ranking.post_id = posts.id and rank = 1) as positive_ranking,
//             (SELECT SUM(rank) as ranking FROM posts_ranking WHERE posts_ranking.post_id = posts.id and rank = -1) as negative_ranking
//         FROM
//             posts JOIN users ON posts.user_id = users.id ORDER BY created_at DESC";
// $res = mysqli_query($link, $query);
// $posts = mysqli_fetch_all($res, MYSQLI_ASSOC);

// foreach ($posts as $post) {
//     $postObj[] = new Post($post['id'], $post['body'], $post['user_id']);
// }
// $postObj[0]->getId();
