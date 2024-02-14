<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harjutused</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <h1 class="text-center mt-5">Harjutus9</h1>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <h5>Tervitus</h5>
                <form method="post" action="">
                    <div class="mb-3">
                        <label for="name" class="form-label">Sisesta oma nimi:</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Tervita</button>
                </form>

                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if (isset($_POST["name"])) {
                        $name = $_POST["name"];
                        echo '<h4 class="mt-3">Tere, ' . ucfirst(strtolower($name)) . '!</h4>';
                    }
                }
                ?>

                <h3>Punktidega tekst</h3>
                <form method="post" action="">
                    <div class="mb-3">
                        <label for="text" class="form-label">Tekst:</label>
                        <input type="text" class="form-control" id="text" name="text" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Sisesta</button>
                </form>

                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if (isset($_POST["text"])) {
                        $text = $_POST["text"];
                        $length = strlen($text);

                        for ($i = 0; $i < $length; $i++) {
                            echo strtoupper($text[$i]);
                            if ($i < $length - 1) {
                                echo ".";
                            }
                        }
                    }
                }
                ?>

                <h5>Roppus</h5>
                <form method="post" action="">
                    <div class="mb-3">
                        <label for="message" class="form-label">Sisesta sõnum:</label>
                        <input type="text" class="form-control" id="message" name="message" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Saada</button>
                </form>

                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if (isset($_POST["message"])) {
                        $message = $_POST["message"];
                        $badWords = array("noob", "loll", "möku");

                        foreach ($badWords as $word) {
                            $message = str_ireplace($word, str_repeat("*", strlen($word)), $message);
                        }

                        echo '<p class="mt-3">Sisestatud sõnum: ' . $message . '</p>';
                    }
                }
                ?>
            </div>

            <div class="col-md-6">
                <h5>E-maili loomine</h5>
                <form method="post" action="">
                    <div class="mb-3">
                        <label for="firstName" class="form-label">Eesnimi:</label>
                        <input type="text" class="form-control" id="firstName" name="firstName" required>
                    </div>
                    <div class="mb-3">
                        <label for="lastName" class="form-label">Perekonnanimi:</label>
                        <input type="text" class="form-control" id="lastName" name="lastName" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Genereeri e-post</button>
                </form>

                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if (isset($_POST["firstName"]) && isset($_POST["lastName"])) {
                        $firstName = $_POST["firstName"];
                        $lastName = $_POST["lastName"];

                        // Asendab täpitähed vastavate tähtedega ja teeb kõik väikesteks tähtedeks
                        $firstName = strtolower(str_replace(['ä', 'ö', 'ü', 'õ'], ['a', 'o', 'u', 'o'], $firstName));
                        $lastName = strtolower(str_replace(['ä', 'ö', 'ü', 'õ'], ['a', 'o', 'u', 'o'], $lastName));

                        $email = $firstName . '.' . $lastName . '@hkhk.edu.ee';
                        echo '<p class="mt-3">Teie e-posti aadress: ' . $email . '</p>';
                    }
                }
                ?>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
