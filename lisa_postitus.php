<?php
// Lisame postituse
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['lisamine'])) {
    $pealkiri = $_POST['pealkiri'];
    $sisu = $_POST['sisu'];

    // Avame tekstifaili postitused.txt
    $file = fopen("postitused.txt", "a");

    // Kirjutame postituse tekstifaili
    fwrite($file, $pealkiri . "\n");
    fwrite($file, $sisu . "\n\n");

    // Sulgeme failiühenduse
    fclose($file);

    // Uuendame lehte, et kuvada uus postitus
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}

// Kustutame postituse
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['kustutamine'])) {
    // Saame valitud postituse indeksi
    $postituse_indeks = $_POST['postituse_indeks'];

    // Loeme postitused failist
    $postitused = file("postitused.txt", FILE_IGNORE_NEW_LINES);

    // Eemaldame valitud postituse
    unset($postitused[$postituse_indeks * 2]);
    unset($postitused[$postituse_indeks * 2 + 1]);

    // Kirjutame ülejäänud postitused faili
    file_put_contents("postitused.txt", implode("\n", $postitused) . "\n");

    // Uuendame lehte, et kuvada postitused
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KT1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .container-fluid {
            padding-left: 0;
            padding-right: 0;
        }
        body {
            margin: 0;
            padding: 0;
        }
        .jumbo, .navbar {
            background-image: url("https://images.pexels.com/photos/956981/milky-way-starry-sky-night-sky-star-956981.jpeg?cs=srgb&dl=pexels-felix-mittermeier-956981.jpg&fm=jpg");
            background-size: cover;
        }
        .jumbo {
            color: white;
            text-align: center;
            padding: 45px 0; 
            margin-bottom: 0;
        }
        .navbar {
            color: white;
            padding: 15px 0;
        }
        .navbar .navbar-brand, .navbar .navbar-nav .nav-link {
            color: white;
        }
        .post {
            padding: 20px 0;
        }
        .post hr {
            width: 30%; /* Muutke vastavalt vajadusele */
            margin: 0 auto; /* Tsentrigeerib joone */
            border-top: 1px solid #1c1c1c; /* Väike joon postituste vahel */
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Daniil Meijel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Menüü" aria-controls="Menüü" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="Menüü">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="ktavaleht.php">Avaleht</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ktminust.php">Minust</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ktkontakt.php">Kontakt</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="lisa_postitus.php">Admin</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid">
    <div class="jumbotron jumbo">
        <div class="container">
            <h1 class="display-4">Praktika IT TV REMONT OÜ</h1>
            <p>Minu praktika HKHKs</p>
        </div>
    </div>
</div>

<div class="container mt-5">
    <h2>Lisa uus postitus</h2>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div class="mb-3">
            <label for="pealkiri" class="form-label">Pealkiri</label>
            <input type="text" class="form-control" id="pealkiri" name="pealkiri" required>
        </div>
        <div class="mb-3">
            <label for="sisu" class="form-label">Sisu</label>
            <textarea class="form-control" id="sisu" name="sisu" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary" name="lisamine">Lisa Postitus</button>
    </form>
</div>

<div class="container mt-5">
    <h2>Kustuta olemasolev postitus</h2>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div class="mb-3">
            <label for="postituse_indeks" class="form-label">Vali postituse pealkiri, mida soovid kustutada:</label>
            <select class="form-select" id="postituse_indeks" name="postituse_indeks">
                <?php
                $postitused = file("postitused.txt", FILE_IGNORE_NEW_LINES);
                for ($i = 0; $i < count($postitused); $i += 2) {
                    echo "<option value='" . $i / 2 . "'>" . $postitused[$i] . "</option>";
                }
                ?>
            </select>
        </div>
        <button type="submit" class="btn btn-danger" name="kustutamine">Kustuta Postitus</button>
    </form>
</div>

<!-- Kuvame olemasolevad postitused -->
<div class="container mt-5">
    <h2>Olemasolevad postitused</h2>
    <?php
    $postitused = file("postitused.txt", FILE_IGNORE_NEW_LINES);
    for ($i = 0; $i < count($postitused); $i += 2) {
        echo "<div class='border p-3 mb-3'>";
        echo "<h4>" . $postitused[$i] . "</h4>"; // Kasuta <h4> pealkirja jaoks
        echo "<p>" . $postitused[$i] . "</p>"; // Kasuta <p> sisu jaoks
        echo "</div>";
    }
    ?>
</div>

</body>
</html>
