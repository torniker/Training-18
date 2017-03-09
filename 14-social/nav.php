<ul>
	<li><a href="index.php">მთავარი</a></li>
	<?php if (!empty($_SESSION['username'])): ?>
		<li>გამარჯობა <?=$_SESSION['username']?></li>
		<li><a href="logout.php">წადი <?=$_SESSION['username']?></a></li>
	<?php else: ?>
	<li><a href="register.php">რეგისტრაცია</a></li>
	<li><a href="login.php">ავტორიზაცია</a></li>
	<?php endif;?>
</ul>
