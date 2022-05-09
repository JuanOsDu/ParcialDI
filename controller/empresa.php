<?php
if (!defined('LIBRARIES_PATH')) {
    define('LIBRARIES_PATH', '../libraries/');
}
if (!defined('VIEWS_PATH')) {
    define('VIEWS_PATH', '../Views/');
}

require_once(LIBRARIES_PATH . "Conexion.php");


function getDatosEmpresa()
{
    $db = Conexion::getConnection();
    //crear variable para hacer consultas SQL
    $query = "SELECT * FROM empresa";
    $result = $db->query($query);
    return $result;
}

function getEmpleados()
{
    $db = Conexion::getConnection();
    //crear variable para hacer consultas SQL
    $query = "SELECT * FROM empleados";
    $result = $db->query($query);
    return $result;
}
function getServicios()
{
    $db = Conexion::getConnection();
    //crear variable para hacer consultas SQL
    $query = "SELECT * FROM servicios";
    $result = $db->query($query);
    return $result;
}
