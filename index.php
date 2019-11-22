<?php
require_once "controladores/PlanetasController.php";
require_once "cargarconfig.php";

$controller = $_REQUEST["controller"] ?? "listado";

switch ($controller) {
    case "insertar":
        (new PlanetasController)->insertar();
        break;
    case "listado":
        (new PlanetasController)->listado();
        break;
    default:
        die("controlador solicitado desconocido");
        break;
}
