<?php
    require_once "planeta.php";
    require_once "ormplanetas.php";
    $orm = new OrmPlanetas();
    $planetas = $orm->obtenerTodosPlanetas();
    require "templates/listado.phtml";
