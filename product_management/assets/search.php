<?php
require_once __DIR__ . "/../model/db.php";

$name = isset($_GET["name"]) ? trim($_GET["name"]) : "";

if ($name === "") {
    $sql = "SELECT id, name, buying_price, selling_price, display FROM products WHERE display = 'Yes'";
    $stmt = $conn->prepare($sql);
} else {
    $sql = "SELECT id, name, buying_price, selling_price, display FROM products WHERE display = 'Yes' AND name LIKE ?";
    $stmt = $conn->prepare($sql);
    $like = $name . "%";
    $stmt->bind_param("s", $like);
}

$stmt->execute();
$result = $stmt->get_result();
$rows = $result ? $result->fetch_all(MYSQLI_ASSOC) : [];
$stmt->close();
?>
<table border="1" cellpadding="10">
    <tr>
        <th>NAME</th>
        <th>PROFIT</th>
        <th></th>
        <th></th>
    </tr>

    <?php if (!empty($rows)) { ?>
        <?php foreach ($rows as $product) { ?>
            <tr>
                <td><?= $product['name'] ?></td>
                <td><?= $product['selling_price'] - $product['buying_price'] ?></td>
                <td><a href="index.php?action=edit&id=<?= $product['id'] ?>">edit</a></td>
                <td><a href="index.php?action=delete&id=<?= $product['id'] ?>">delete</a></td>
            </tr>
        <?php } ?>
    <?php } else { ?>
        <tr>
            <td colspan="4">No products found</td>
        </tr>
    <?php } ?>
</table>
