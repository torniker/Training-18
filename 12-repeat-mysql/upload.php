<?php
$link = mysqli_connect('localhost', 'root', '', 'training');
if (!$link) {
    die('Could not connect: '.mysqli_error());
}
if (!empty($_FILES)) {
    $path = 'files/'.$_FILES['photo']['name'];
    if (move_uploaded_file($_FILES['photo']['tmp_name'], $path)) {
        $query = "INSERT INTO photos (path) VALUES ('".$path."')";
        mysqli_query($link, $query);
    }
}

$query = "SELECT * FROM photos";
$result = mysqli_query($link, $query);
$photos = mysqli_fetch_all($result, MYSQLI_ASSOC);
mysqli_free_result($result);
mysqli_close($link);

?>
<!DOCTYPE html>
<html>
<head>
    <title>Upload file</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="photo">
        <button type="submit">Upload</button>
    </form>
    <?php foreach ($photos as $photo): ?>
    <img src="<?=$photo['path']?>" height="200">
    <?php endforeach;?>
</body>
</html>
