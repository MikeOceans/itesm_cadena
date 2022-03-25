<?php 
include 'includes/header.php';
// include 'includes/db.php'
?>
<div
	class="container mt-2 border-bottom border-top px-0 d-flex justify-content-between align-items-center"
>
	<div class="py-3 ps-4">
		<h2>DESPENSAS</h2>
	</div>
	<div class="bg-primary p-3 rounded-start m-0">
		<a href="despensas.php">
			<i class="bi bi-box2-heart-fill" style="color: white; font-size: 36px"></i>
		</a>
	</div>
</div>
<div
	class="container mt-0 border-bottom border-top px-0 d-flex justify-content-between align-items-center"
>
	<div class="py-3 ps-4">
		<h2>CONSULTAS</h2>
	</div>
	<div class="bg-info p-3 rounded-start m-0">
		<a href="consultas.php">
			<i class="bi bi-clipboard2-pulse" style="color: white; font-size: 36px"></i>
		</a>
	</div>
</div>
<div
	class="container mt-0 border-bottom border-top px-0 d-flex justify-content-between align-items-center"
>
	<div class="py-3 ps-4">
		<h2>KITS SANITARIOS</h2>
	</div>
	<div class="bg-success p-3 rounded-start m-0">
		<i class="bi bi-droplet" style="color: white; font-size: 36px"></i>
	</div>
</div>
<div class="container my-5 d-flex justify-content-center">
	<a href="index.php" class="btn btn-primary px-4 py-2 rounded-pill d-flex align-items-center">
		<i class="bi bi-arrow-clockwise" style="font-size: 45px"></i>
		<h1 class="ps-3 fw-bold m-0">ACTUALIZAR</h1>
	</a>
</div>
<?php 
include 'includes/footer.php'
?>
