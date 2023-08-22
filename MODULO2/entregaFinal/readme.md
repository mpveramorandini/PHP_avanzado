El sitio contiene 4 secciones.
Para el desarrollo utilice  PHP nativo orientado a objetos, empleando MVC.
En MODELOS tenemos:
1-La conexion a la base de datos se hizo con PDO. 
2-formularios.modelo.php donde se crea un metodo para cada acción(insertar, seleccionar, actualizar y eliminar registro), que trabaja con los parámetros tabla y datos. Se utilizan sentencias preparadas.
En CONTROLADORES tenemos:
1-formularios.controlador.php, recibe la información por POST, en registro los datos estan en un array. 
2-plantilla.controlador.php

En VISTAS:
El Registro es mediante usuario, mail y contraseña. En script.js, con AJAX controlamos que el correo no exista en la base de datos, es decir se hace la validacion del email. 
En plantilla.php se configuró con la variable GET, una pagina de error404.php, si el usuario se equivoca lo redirige a esa página 
Tambien utilicé la variable GET para enviar información entre archivos.
Las paginas de vistas se conectan a los controladores. 

Para Ingresar debo loguearme, Ingreso e Inicio me llevaran a Ingreso para hacer el logueo. En formularios.controlador.php se hace la validacion y si esta ok me rutea a la pagina inicio.php donde puedo borrar o eliminar los registros que estan en la base de datos. 
Salir me llevara nuevamente a inicio.php donde debo loguearme nuevamente. 


