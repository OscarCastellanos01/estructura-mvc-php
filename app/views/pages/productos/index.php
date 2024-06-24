<?php require_once APP . '/views/layouts/header.php' ?>

<div class="container-fluid bg-light py-5">
	<div class="container">
		<h1>Productos</h1>
		<ul>
			<?php foreach ($datos['productos'] as $producto): ?>
				<li><?php echo $producto['nombre'] . ' - $' . $producto['precio']; ?></li>
			<?php endforeach; ?>
		</ul>
	</div>
</div>

<?php require_once APP . '/views/layouts/footer.php' ?>