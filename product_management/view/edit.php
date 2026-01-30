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
$is_display = isset($product["display"]) && $product["display"] === "Yes";
?>
<!DOCTYPE html>
<html>
<head>
    <title>EDIT PRODUCT</title>
</head>
<body>

<form method="post" action="index.php?action=edit&id=<?php echo (int) $product["id"]; ?>">
    <fieldset>
        <legend>EDIT PRODUCT</legend>
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" value="<?php echo htmlspecialchars($product["name"]); ?>"></td>
            </tr>
            <tr>
                <td>Buying Price</td>
                <td><input type="number" name="buying_price" step="0.01" value="<?php echo htmlspecialchars($product["buying_price"]); ?>"></td>
            </tr>
            <tr>
                <td>Selling Price</td>
                <td><input type="number" name="selling_price" step="0.01" value="<?php echo htmlspecialchars($product["selling_price"]); ?>"></td>
            </tr>
            <tr>
                <td colspan="2"><hr></td>
            </tr>
            <tr>
                <td>Display</td>
                <td><input type="checkbox" name="display" value="Yes" <?php echo $is_display ? "checked" : ""; ?>></td>
            </tr>
            <tr>
                <td colspan="2"><hr></td>
            </tr>
            <tr>
                <td><button type="submit">SAVE</button></td>
            </tr>
        </table>
    </fieldset>
</form>

</body>
</html>
