<!DOCTYPE html>
<html>
<head>
    <title>ADD PRODUCT</title>
</head>
<body>

<form method="post" action="index.php?action=add">
    <fieldset>
        <legend>ADD PRODUCT</legend>
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Buying Price</td>
                <td><input type="number" name="buying_price" step="0.01"></td>
            </tr>
            <tr>
                <td>Selling Price</td>
                <td><input type="number" name="selling_price" step="0.01"></td>
            </tr>
            <tr>
                <td colspan="2"><hr></td>
            </tr>
            <tr>
                <td>Display</td>
                <td><input type="checkbox" name="display" value="Yes"></td>
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
