<?php
require "Chica.php";

class Samantha extends Chica {

    public function relacionarse() {
        $cita = "Samantha está en una cita";
        echo $cita;
    }
}

 $jones = new Samantha ("Rubia", "Alta","RP");
 $jones -> mostrar_chica();
 $jones -> ir_fiesta(); 



?>