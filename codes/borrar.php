<?php
    // obtiene los datos de conexion
    require_once('conexion.inc');

    // elimina datos en la tabla
    $auxSql = sprintf("delete from datosAuxiliares where cedula = %s;",$_POST['cedula']);

    mysqli_query($conex, $auxSql);

    // valida si borra el registro
    if(mysqli_affected_rows($conex) > 0 ){
        $salida = array("estado" => "1",
            "mensaje" => "Dato eliminado con exito");
    }else{
        $salida = array("estado" => "0",
            "mensaje" => "El dato no se pudo eliminar");
    }

    // imprime los datos en formato json
    echo json_encode($salida);

?>
