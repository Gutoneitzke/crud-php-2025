<?php
require_once __DIR__ . '/../app/controllers/UserController.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$method = $_SERVER['REQUEST_METHOD'];

$controller = new UserController();

switch ($uri) {
    case '/':
        $controller->index();
        break;

    case '/create':
        $controller->create();
        break;

    case '/store':
        $controller->store($_POST);
        break;

    case (preg_match('/\/edit\/\d+/', $uri) ? true : false):
        $id = basename($uri);
        $controller->edit($id);
        break;

    case (preg_match('/\/update\/\d+/', $uri) ? true : false):
        $id = basename($uri);
        $controller->update($id, $_POST);
        break;

    case (preg_match('/\/delete\/\d+/', $uri) ? true : false):
        $id = basename($uri);
        $controller->destroy($id);
        break;

    default:
        http_response_code(404);
        echo "Página não encontrada!";
        break;
}