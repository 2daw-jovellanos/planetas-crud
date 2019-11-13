<?php
class Planeta {
    public $id;
    public $nombre;
    public $radio;
    public $peso;

    function __construct($nombre, $radio, $peso){
        $this->nombre = $nombre;
        $this->radio = $radio;
        $this->peso = $peso;
    }

    function calcularSuperficie(){
        $area = 4 * pi() * $this->radio * $this->radio;
        return $area;
    }

}