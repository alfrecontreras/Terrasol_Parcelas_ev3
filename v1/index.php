<?php
include_once '../version1.php';

//valores de los parametros
$existeId = false;
$valorId = 0;

if (count($_parametros) > 0) {
    foreach ($_parametros as $p) {
        if (strpos($p, 'id') !== false) {
            $existeId = true;
            $valorId = explode('=', $p)[1];
        }
    }
}

if ($_version == 'v1') {
    if ($_mantenedor == 'mantenedor') {
        switch ($_metodo) {
            case 'GET':
                if ($_header == $_token_get){
                    /*
                    include_once 'controller.php';
                    include_once '../conexion.php';
                    $control = new Controlador();
                    $lista = $control->getAll();
                    */
                    $lista = [
                        [
                            "id" => 0,
                            "nombre" => "ejemplo 0",
                            "activo" => false
                        ],
                        [
                            "id" => 1,
                            "nombre" => "ejemplo 1",
                            "activo" => true
                        ],
                        [
                            "id" => 2,
                            "nombre" => "ejemplo 2",
                            "activo" => false
                        ],
                    ];
                    http_response_code(200);
                    echo json_encode(["data" => $lista]);
                }else{
                    http_response_code(401);
                    echo json_encode(["Error" => "No tiene autorizacion GET"]);
                }
                break;
            default:
                http_response_code(405);
                echo json_encode(["Error" => "No implementado"]);
                break;
        }
    }
}