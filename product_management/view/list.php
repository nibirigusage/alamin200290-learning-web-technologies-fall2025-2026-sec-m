<!DOCTYPE html>
<html>
<head>
    <title>DISPLAY</title>
</head>
<body>

<fieldset>
    <legend>DISPLAY</legend>

    <table border="1" cellpadding="10">
        <tr>
            <th>NAME</th>
            <th>PROFIT</th>
            <th></th>
            <th></th>
        </tr>

        <?php if (!empty($products)) { ?>
            <?php foreach ($products as $product) { ?>
                <?php if ($product['display'] !== 'Yes') { continue; } ?>
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
</fieldset>

<br>
<a href="index.php?action=add">Add Product</a>
<br>
<a href="index.php?action=search">Search Products</a>

</body>
</html>
