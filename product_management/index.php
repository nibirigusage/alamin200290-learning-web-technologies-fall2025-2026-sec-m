<?php
require_once __DIR__ . "/controller/ProductController.php";

$controller = new ProductController();
$action = isset($_GET["action"]) ? $_GET["action"] : "index";

switch ($action) {
    case "add":
        $controller->add();
        break;
    case "edit":
        $controller->edit();
        break;
    case "delete":
        $controller->delete();
        break;
    case "search":
        $controller->search();
        break;
    case "index":
    default:
        $controller->index();
        break;
}
