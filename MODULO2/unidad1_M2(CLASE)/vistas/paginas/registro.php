    <div>
        <form action="" method="post" class="form">
            <div>

                <label for="nombre">Nombre:</label>
                <input type="text" class="" id="nombre" name="registroNombre">

                <label for="email">Email:</label>
                <input type="email" class="" id="email" name="registroEmail">

                <label for="pwd">Contraseña:</label>
                <input type="password" class="" id="pwd" name="registroPassword">



            <?php
                $registro = ControladorFormularios::ctrRegistro();

                ?>
            <input type="submit" value="enviar" class="enviar">
            <!-- <button class="" name="enviar" type="submit"> Enviar </button> -->

</div>

        </form>
    </div>