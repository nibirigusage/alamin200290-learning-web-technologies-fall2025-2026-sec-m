<?php
if (!isset($product) || !is_array($product)) {
    $product = [
        "id" => 0,
        "name" => "",
        "buying_price" => "",
        "selling_price" => "",
        "display" => "No",
    ];
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>DELETE PRODUCT</title>
</head>
<body>

<form method="post" action="index.php?action=delete&id=<?php echo (int) $product["id"]; ?>">
    <fieldset>
        <legend>DELETE PRODUCT</legend>
        Name: <?php echo htmlspecialchars($product["name"]); ?><br>
        Buying Price: <?php echo htmlspecialchars($product["buying_price"]); ?><br>
        Selling Price: <?php echo htmlspecialchars($product["selling_price"]); ?><br>
        Displayable: <?php echo htmlspecialchars($product["display"]); ?>
        <hr>
        <button type="submit">Delete</button>
    </fieldset>
</form>

</body>
</html>
