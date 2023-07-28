<?php
    // obtiene los datos de conexion
    require_once('conexion.inc');

    // consulta de datos auxiliares
    $auxSql = sprintf('select * from datosAuxiliares where cedula = %s;', $_POST['cedula']);
    $auxResult = mysqli_query($conex, $auxSql);

    // valida si existe el registro
    if(mysqli_num_rows($auxResult) > 0 ){
        $auxValores = mysqli_fetch_array($auxResult);
        $salida = array("cedula" => $auxValores['cedula'],
                        "nombre" => $auxValores['nombre']);
    }else{
        $salida = array("cedula" => "No existe",
                        "nombre" => "No existe");
    }

    // imprime los datos en formato json
    echo json_encode($salida);
?>

