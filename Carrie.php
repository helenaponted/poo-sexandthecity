<?php
require "Chica.php";

class Carrie extends Chica {


    public function comprar_manolos(){
        $blanik = "los mejores tacones \n";
        echo $blanik;
    }
}

$bradshaw = new Carrie("Rubia", "Bajita","Escritora");
$bradshaw -> mostrar_chica();
$bradshaw -> ir_fiesta(); 
$bradshaw -> comprar_manolos();

?>