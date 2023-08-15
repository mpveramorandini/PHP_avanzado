<h1 class="tituloPagina">Ingreso</h1>
<div class="contacto">

    <form action="" method="post" class="formulario">

        <p>
            <label for="email">Email:</label>
             <input type="text" name="ingresoEmail" id="mail"> <!--ver -->
        </p>
        <p>
            <label for="pwd">Contraseña</label>
            <input type="password" name="ingresoPassword" id="pwd">
        </p>

	

		<?php 

		$ingreso = new ControladorFormularios();
		$ingreso -> ctrIngreso();

		?>
		
		<p class="boton">
            <button type="submit">Ingresar</button>
        </p>
	</form>

</div>