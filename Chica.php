<?php
class Chica {
    public $pelo;
    private $cuerpo;
    public $trabajo;


public function __construct($pelo, $cuerpo, $trabajo)
    {
        $this -> pelo = $pelo;
        $this -> cuerpo = $cuerpo;
        $this -> trabajo = $trabajo;

    }

    public function mostrar_chica(){
        echo "Pelo: {$this -> pelo} \n";
        echo "Cuerpo: {$this ->  cuerpo} \n";
        echo "Trabajo: {$this -> trabajo} \n";
    }

 public function ir_fiesta(){
        $fiesta = "la chica está de fiesta \n";
        echo $fiesta; 
    }
}
?>