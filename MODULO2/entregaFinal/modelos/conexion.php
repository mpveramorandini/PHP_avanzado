
<?php
class Conexion{
    static public function conectar(){
        $link = new PDO("mysql:host=localhost;port=3306;dbname=id20761485_php_avanzado_mpv", 
                            "id20761485_mariapaulavera",
                            "Torcuato-2010"); 
        $link->exec("set names utf8");

        return $link;
    }
}
