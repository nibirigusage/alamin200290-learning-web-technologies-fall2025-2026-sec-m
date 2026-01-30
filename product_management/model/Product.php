<?php
require_once __DIR__ . "/db.php";

class Product
{
    private $conn;

    public function __construct()
    {
        global $conn;
        $this->conn = $conn;
    }

    public function insertProduct($data)
    {
        $display = isset($data["display"]) && $data["display"] === "Yes" ? "Yes" : "No";
        $sql = "INSERT INTO products (name, buying_price, selling_price, display) VALUES (?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("sdds", $data["name"], $data["buying_price"], $data["selling_price"], $display);
        $ok = $stmt->execute();
        $stmt->close();
        return $ok;
    }

    public function getDisplayProducts()
    {
        $sql = "SELECT id, name, buying_price, selling_price, display FROM products WHERE display = 'Yes'";
        $result = $this->conn->query($sql);
        if (!$result) {
            return [];
        }
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getProductById($id)
    {
        $sql = "SELECT id, name, buying_price, selling_price, display FROM products WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        $stmt->close();
        return $row;
    }

    public function updateProduct($id, $data)
    {
        $display = isset($data["display"]) && $data["display"] === "Yes" ? "Yes" : "No";
        $sql = "UPDATE products SET name = ?, buying_price = ?, selling_price = ?, display = ? WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("sddsi", $data["name"], $data["buying_price"], $data["selling_price"], $display, $id);
        $ok = $stmt->execute();
        $stmt->close();
        return $ok;
    }

    public function deleteProduct($id)
    {
        $sql = "DELETE FROM products WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $ok = $stmt->execute();
        $stmt->close();
        return $ok;
    }

    public function searchProductByName($name)
    {
        $sql = "SELECT id, name, buying_price, selling_price, display FROM products WHERE display = 'Yes' AND name LIKE ?";
        $stmt = $this->conn->prepare($sql);
        $like = "%" . $name . "%";
        $stmt->bind_param("s", $like);
        $stmt->execute();
        $result = $stmt->get_result();
        $rows = $result->fetch_all(MYSQLI_ASSOC);
        $stmt->close();
        return $rows;
    }
}
