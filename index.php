<?php
// Incluye el archivo con la conexión de la base de datos
require_once 'config/Conexion.php'; 
require_once 'api/CategoriaServicioEndpoint.php';
require_once 'api/InfoContactoEndpoint.php';
require_once 'api/HistoriaEndpoint.php';
require_once 'api/PreguntaFrecuenteEndpoint.php';
require_once 'api/ParcelaEndpoint.php';

// Crea una instancia de la conexión PDO
$pdo = new Conexion();
$db = $pdo->getConnection(); // Obtén la conexión PDO

// Crea instancias de los endpoints
$categoriaServicioEndpoint = new CategoriaServicioEndpoint($db);
$infoContactoEndpoint = new InfoContactoEndpoint($db);
$historiaEndpoint = new HistoriaEndpoint($db);
$preguntaFrecuenteEndpoint = new PreguntaFrecuenteEndpoint($db);
$parcelaEndpoint = new ParcelaEndpoint($db);

// Verifica si REQUEST_METHOD está definido antes de acceder a él
if (isset($_SERVER['REQUEST_METHOD'])) {
    $method = $_SERVER['REQUEST_METHOD'];
    switch ($method) {
        case 'GET':
            // Define cómo manejarás las solicitudes GET
            if (isset($_GET['endpoint'])) {
                switch ($_GET['endpoint']) {
                    case 'categoriaServicio':
                        $categoriaServicioEndpoint->handleGetRequest();
                        break;
                    case 'infoContacto':
                        $infoContactoEndpoint->handleGetRequest();
                        break;
                    case 'historia':
                        $historiaEndpoint->handleGetRequest();
                        break;
                    case 'preguntaFrecuente':
                        $preguntaFrecuenteEndpoint->handleGetRequest();
                        break;
                    case 'parcela':
                        $parcelaEndpoint->handleGetRequest();
                        break;
                    default:
                        http_response_code(404);
                        echo json_encode(['message' => 'Endpoint no encontrado']);
                        break;
                }
            } else {
                http_response_code(400);
                echo json_encode(['message' => 'Falta el parámetro endpoint']);
            }
            break;
        case 'POST':
            // Define cómo manejarás las solicitudes POST
            // Ejemplo para manejar POST
            $categoriaServicioEndpoint->handlePostRequest();
            break;
        case 'PUT':
            // Define cómo manejarás las solicitudes PUT
            $categoriaServicioEndpoint->handlePutRequest();
            break;
        case 'DELETE':
            // Define cómo manejarás las solicitudes DELETE
            $categoriaServicioEndpoint->handleDeleteRequest();
            break;
        default:
            http_response_code(405);
            echo json_encode(['message' => 'Método no permitido']);
            break;
    }
} else {
    http_response_code(400);
    echo json_encode(['message' => 'Método de solicitud no definido']);
}
?>