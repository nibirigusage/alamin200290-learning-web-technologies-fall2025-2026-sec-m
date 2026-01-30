<?php
require_once __DIR__ . "/../model/Product.php";

class ProductController
{
    private $model;

    public function __construct()
    {
        $this->model = new Product();
    }

    public function index()
    {
        $products = $this->model->getDisplayProducts();
        require __DIR__ . "/../view/list.php";
    }

    public function add()
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $this->model->insertProduct($_POST);
            header("Location: index.php?action=index");
            exit;
        }
        require __DIR__ . "/../view/add.php";
    }

    public function edit()
    {
        $id = isset($_GET["id"]) ? (int) $_GET["id"] : 0;
        if ($id <= 0) {
            header("Location: index.php?action=index");
            exit;
        }

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $this->model->updateProduct($id, $_POST);
            header("Location: index.php?action=index");
            exit;
        }

        $product = $this->model->getProductById($id);
        require __DIR__ . "/../view/edit.php";
    }

    public function delete()
    {
        $id = isset($_GET["id"]) ? (int) $_GET["id"] : 0;
        if ($id <= 0) {
            header("Location: index.php?action=index");
            exit;
        }

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $this->model->deleteProduct($id);
            header("Location: index.php?action=index");
            exit;
        }

        $product = $this->model->getProductById($id);
        require __DIR__ . "/../view/delete.php";
    }

    public function search()
    {
        require __DIR__ . "/../view/search.php";
    }
}
