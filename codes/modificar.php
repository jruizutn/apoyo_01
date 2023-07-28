<?php
    // obtiene los datos de conexion
    require_once('conexion.inc');

    // modifica datos en la tabla
    $auxSql = sprintf("update datosAuxiliares set nombre = '%s' where cedula = %s;",
        $_POST['nombre'], $_POST['cedula']);

    mysqli_query($conex, $auxSql);

    // valida si modifica el registro
    if(mysqli_affected_rows($conex) > 0 ){
        $salida = array("estado" => "1",
            "mensaje" => "Dato modificado con exito");
    }else{
        $salida = array("estado" => "0",
            "mensaje" => "El dato no se pudo modificar");
    }

    // imprime los datos en formato json
    echo json_encode($salida);

?>

