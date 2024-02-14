<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dünaamiline leht</title>
</head>
<body>
    <h1>Dünaamiline leht</h1>
    <p>Sisesta lehe nimi:</p>
    <form action="content.php" method="get">
        <input type="text" name="page" placeholder="Sisesta lehe nimi">
        <button type="submit">Avalehele</button>
    </form>
</body>
</html>

<?php
// Funktsioon turvalisuse kontrolliks
function securePage($page) {
    // Kõik lubatud lehtede nimed
    $allowedPages = array("page1", "page2", "page3", "page4");

    // Kontrollime, kas leht on lubatud
    if (in_array($page, $allowedPages)) {
        return true;
    } else {
        return false;
    }
}

// Kui URL-i sisu on olemas
if (isset($_GET['page'])) {
    // Hangime lehe nime
    $page = $_GET['page'];

    // Kontrollime turvalisust
    if (securePage($page)) {
        // Kuva leht vastavalt nimele
        echo "<h1>Leht: $page</h1>";
        echo "<p>Sisu lehele $page</p>";
    } else {
        // Leht ei eksisteeri, kuvame veateate
        echo "<h1>Lehte ei leitud!</h1>";
        echo "<p>Lehte nimega \"$page\" ei eksisteeri.</p>";
    }
}
?>

