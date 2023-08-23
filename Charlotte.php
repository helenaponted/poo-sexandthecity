<?php
require "Chica.php";

class Charlotte extends Chica {


    public function marido_judio(){
        $marido = "La comida es Kosher \n";
        echo $marido;
    }  
}

$york = new Charlotte("Morena", "Media","Art Dealer");
$york -> mostrar_chica();
$york -> ir_fiesta(); 
$york -> marido_judio();


?>