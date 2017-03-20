<?php
$link = mysqli_connect('localhost', 'root', '', 'training');
if (!$link) {
    die('Could not connect: '.mysqli_error());
}
