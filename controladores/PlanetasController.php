<?php
require_once "Controller.php";
require_once "modelo/Planeta.php";
require_once "modelo/Ormplanetas.php";
require_once "funciones.php";

class PlanetasController extends Controller {
    
    function listado() {
        $planetas = (new OrmPlanetas)->obtenerTodosPlanetas();
        require "vistas/listado.phtml"; 
    }

    function insertar() {
        $nombre = sanitizar($_REQUEST["nombre"] ?? "");
        $peso = $_REQUEST["peso"] ?? 0;
        $radio = $_REQUEST["radio"] ?? 0;
        $error_nombre ="";
        $hayErrores = false;
        if ($_SERVER["REQUEST_METHOD"]=="POST") {
            $hayErrores = false;
            if ($nombre == "") {
                $error_nombre="Por favor, rellene el nombre.";
                $hayErrores = true;
            }
            if (!$hayErrores) {
                $planeta = new Planeta;
                $planeta->nombre = $nombre;
                $planeta->peso = $peso;
                $planeta->radio = $radio;
                (new OrmPlanetas)->insertar($planeta);
                //header("Location: index.php?controller=listado");
            } else {
                require "vistas/insertarform.phtml";    
            }
        } else {
            require "vistas/insertarform.phtml";
        }
           

    }

}
