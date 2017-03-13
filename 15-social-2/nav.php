<ul class="nav nav-pills">
	<li><a href="index.php">მთავარი</a></li>
	<?php if (!empty($_SESSION['username'])): ?>
		<li><a>გამარჯობა <?=$_SESSION['username']?></a></li>
		<li><a href="logout.php">წადი <?=$_SESSION['username']?></a></li>
	<?php else: ?>
	<li><a href="register.php">რეგისტრაცია</a></li>
	<li><a href="login.php">ავტორიზაცია</a></li>
	<?php endif;?>
</ul>
