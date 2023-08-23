<?php
require "Chica.php";

class Miranda extends Chica {


    public function embarazo(){
        $embarazada = "Embarazo no deseado \n";
        echo $embarazada;
    }
}

$hobbes = new Miranda("Peliroja", "Alta","Abogada");
$hobbes -> mostrar_chica();
$hobbes -> ir_fiesta(); 
$hobbes -> embarazo();


?>