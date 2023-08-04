<div>
	<form class="" method="post">

		<div class="">

			<label for="email">Correo electrónico:</label>
			<input type="email" class="" id="email" name="ingresoEmail">
			

			<label for="pwd">Contraseña:</label>
			<input type="password" class="" id="pwd" name="ingresoPassword">

			</div>

	

		<?php 

		$ingreso = new ControladorFormularios();
		$ingreso -> ctrIngreso();

		?>
		
		<button type="submit" class="">Ingresar</button>
	</div>
	</form>

</div>