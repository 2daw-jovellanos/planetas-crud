<?php
$router=true;
require_once "cargarconfig.php";
require_once "controladores/PlanetasController.php";
$controller = $_REQUEST["controller"] ?? "listado";

switch ($controller) {
    case "nuevo":
        if ($_SERVER["REQUEST_METHOD"]=="POST") {
            (new PlanetasController)->recogerInsertar();
        } else {
            (new PlanetasController)->insertar();
        }
        break;
    case "modificacion":
            if ($_SERVER["REQUEST_METHOD"]=="POST") {
                (new PlanetasController)->recogerModificacion();
            } else {
                (new PlanetasController)->modificar();
            }
            break;        
    case "listado":
        (new PlanetasController)->listado();
        break;
    case "borrado":
        (new PlanetasController)->confirmarBorrado();
        break;
    case "borrado-efectivo":
            (new PlanetasController)->borradoEfectivo();
            break;
    default:
        die("controlador solicitado desconocido");
        break;
}
