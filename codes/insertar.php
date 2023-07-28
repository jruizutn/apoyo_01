<?php
    // obtiene los datos de conexion
    require_once('conexion.inc');

    // inserta datos en la tabla
    $auxSql = sprintf("insert into datosAuxiliares(cedula, nombre) values(%s, '%s');",
        $_POST['cedula'], $_POST['nombre']);

    mysqli_query($conex, $auxSql);

    // valida si existe el registro
    if(mysqli_affected_rows($conex) > 0 ){
        $salida = array("estado" => "1",
                        "mensaje" => "Dato registrado con exito");
    }else{
        $salida = array("estado" => "0",
                        "mensaje" => "No se pudo registrar el dato");
    }

    // imprime los datos en formato json
    echo json_encode($salida);

?>
