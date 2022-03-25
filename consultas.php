<?php 
include "includes/header.php"
?>
<div class="px-4">
	<div class="input-group mb-3">
		<span style="min-width: 125px" class="input-group-text" id="basic-addon1"
			>Paciente No.</span
		>
		<input type="text" class="form-control" placeholder="ID Paciente" />
	</div>
	<div class="input-group mb-3">
		<span style="min-width: 125px" class="input-group-text" id="basic-addon1">Nombre</span>
		<input type="text" class="form-control" placeholder="Nombre" />
	</div>
	<div class="input-group mb-3">
		<span style="min-width: 125px" class="input-group-text" id="basic-addon1">Apellidos </span>
		<input type="text" class="form-control" placeholder="Apellidos" />
	</div>
	<div class="input-group mb-3">
		<label style="min-width: 125px" class="input-group-text" for="inputGroupSelect01"
			>Consulta</label
		>
		<select class="form-select" id="inputGroupSelect01">
			<option selected>Choose...</option>
			<option value="1">Medica General</option>
			<option value="2">Psicologica</option>
			<option value="3">Medica Especializada</option>
		</select>
	</div>
	<div class="mb-3">
		<div class="input-group text-center">
			<span style="width: 100%" class="input-group-text rounded-top">Diagnostico</span>
		</div>
		<div class="input-group">
			<textarea class="form-control" aria-label="With textarea"></textarea>
		</div>
	</div>
	<div class="mb-3">
		<div class="input-group text-center">
			<span style="width: 100%" class="input-group-text rounded-top"
				>Medicamentos Prescritos</span
			>
		</div>
		<div class="input-group">
			<textarea class="form-control" aria-label="With textarea"></textarea>
		</div>
	</div>
	<div>
		<a href="index.php" class="d-grid">
			<button id="sendBtn" type="submit" class="btn btn-primary btn-lg rounded-pill">
				Enviar
			</button>
		</a>
	</div>
</div>
<?php include "includes/footer.php" ?>
