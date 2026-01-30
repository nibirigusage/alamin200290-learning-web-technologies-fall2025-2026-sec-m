<!DOCTYPE html>
<html>
<head>
    <title>SEARCH</title>
</head>
<body>

<form onsubmit="return false;">
    <fieldset>
        <legend>SEARCH</legend>
        <input type="text" id="searchName" value="">
        <button type="button" id="searchBtn">Search By Name</button>
        <br><br>
        <div id="results"></div>
    </fieldset>
</form>

<script>
function runSearch() {
    var name = document.getElementById('searchName').value;
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'assets/search.php?name=' + encodeURIComponent(name), true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            document.getElementById('results').innerHTML = xhr.responseText;
        }
    };
    xhr.send();
}

document.getElementById('searchBtn').addEventListener('click', runSearch);
document.getElementById('searchName').addEventListener('input', runSearch);
window.addEventListener('load', runSearch);
</script>

</body>
</html>
