<?php 
include 'includes/header.php'
?>
<div class="container mt-3 py-2">
    <h1 class="text-center title">DESPENSAS</h1>
    <div class="d-flex justify-content-center mt-5">
        <div class="d-flex">
        <button onClick='decrementValue()' style="width: 75px; height:75px;" class="btn btn-primary round-full rounded-circle text-white text-center">
            <i class="bi bi-dash" style="font-size:45px"></i>
        </button>
        <input id="contador" min="0" style="width:100px" class='form-control mx-3 text-center fs-1' type="text">
        <button onClick='incrementValue()' style="width: 75px; height:75px;" class="btn btn-primary round-full rounded-circle text-white text-center">
            <i class="bi bi-plus" style="font-size:45px"></i>
        </button>
        </div>
    </div>
    <div class="container mt-5 w-75">
        <textarea class="form-control" placeholder="NOTAS..." rows='8'></textarea>
    </div>
</div>
<div class="container my-5 d-flex justify-content-center">
	<a href="index.php" class="btn btn-primary px-4 py-2 rounded-pill d-flex align-items-center">
		<h1 class="px-4fw-bold m-0">ENVIAR</h1>
	</a>
</div>
<script>
    function incrementValue()
    {
        var value = parseInt(document.getElementById('contador').value, 10);
        value = isNaN(value) ? 0 : value;
        value++;
        document.getElementById('contador').value = value;
    }
    function decrementValue()
    {
        var value = parseInt(document.getElementById('contador').value, 10);
        value = isNaN(value) ? 0 : value;
        value--;
        value < 0 ? document.getElementById('contador').value = 0 :document.getElementById('contador').value = value;
    }
</script>

<?php include 'includes/footer.php' ?>