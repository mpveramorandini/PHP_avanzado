<h1 class="tituloPagina">Ingreso</h1>
<div class="contacto">

    <form action="" method="post" class="formulario">

        <p>
            <label for="nombre">Usuario:</label>
             <input type="text" name="ingresoNombre" id="nombre"> <!--ver -->
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