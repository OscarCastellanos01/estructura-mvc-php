<?php require_once APP . '/views/layouts/header.php' ?>

<div class="container-fluid bg-light py-5">
	<div class="container">
		<h2>Users:</h2>
		<ul>
			<?php foreach ($datos['users'] as $user): ?>
				<li><?php echo $user['name'] . ' (' . $user['email'] . ')'; ?></li>
			<?php endforeach; ?>
		</ul>
  </div>
</div>

<?php require_once APP . '/views/layouts/footer.php' ?>