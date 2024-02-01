<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harjutused</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .result-box {
            border-radius: 10px;
            padding: 10px;
            margin-top: 10px;
        }
        .true-result {
            border: 2px solid green;
        }
        .false-result {
            border: 2px solid red;
        }
    </style>
</head>
<body>
    <h1 class="text-center mt-5">Harjutus4</h1>

    <div class="container mt-5">
        <div class="row">
           
            <div class="col-md-6">
                <h4>Jagamine</h4>
                <form method="get" action="">
                    <div class="form-group">
                        <label for="number1">Esimene arv:</label>
                        <input type="number" class="form-control" id="number1" name="number1" required>
                    </div>
                    <div class="form-group">
                        <label for="number2">Teine arv:</label>
                        <input type="number" class="form-control" id="number2" name="number2" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Jaga</button>
                </form>
                <?php

                //Harjutus4
                //Daniil Meijel
                //01.02.24



                if (!empty($_GET['number1']) && !empty($_GET['number2'])) {
                    $number1 = $_GET['number1'];
                    $number2 = $_GET['number2'];
                
                    echo '<div class="result-box ';
                    if ($number2 != 0) {
                        $result = $number1 / $number2;
                        echo 'true-result">';
                        echo "<p>Jagamise tulemus: $result</p>";
                    } else {
                        echo 'false-result">';
                        echo "<p>Hoiatus: Nulliga jagamine ei ole lubatud!</p>";
                    }
                    echo '</div>';
                }
                ?>
            </div>

           
            <div class="col-md-6">
                <h4>Vanus</h4>
                <form method="post" action="">
                    <div class="form-group">
                        <label for="age1">Esimene vanus:</label>
                        <input type="number" class="form-control" id="age1" name="age1" required>
                    </div>
                    <div class="form-group">
                        <label for="age2">Teine vanus:</label>
                        <input type="number" class="form-control" id="age2" name="age2" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Võrdle vanuseid</button>
                </form>
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["age1"]) && isset($_POST["age2"])) {
                    $age1 = $_POST["age1"];
                    $age2 = $_POST["age2"];
                
                    echo '<div class="result-box ';
                    if (!empty($age1) && !empty($age2)) {
                        if ($age1 > $age2) {
                            echo 'true-result">';
                            echo "<p>Esimene isik on vanem</p>";
                        } elseif ($age2 > $age1) {
                            echo 'true-result">';
                            echo "<p>Teine isik on vanem</p>";
                        } else {
                            echo 'true-result">';
                            echo "<p>Mõlemad isikud on ühevanused</p>";
                        }
                    } else {
                        echo 'false-result">';
                        echo "<p>Mõni sisestatud vanus on puudu</p>";
                    }
                    echo '</div>';
                }
                ?>
            </div>

            
            <div class="col-md-6 mt-5">
                <h4>Ristkülik või ruut</h4>
                <form method="post" action="">
                    <div class="form-group">
                        <label for="length">Pikkus:</label>
                        <input type="number" class="form-control" id="length" name="length" required>
                    </div>
                    <div class="form-group">
                        <label for="width">Laius:</label>
                        <input type="number" class="form-control" id="width" name="width" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Kontrolli</button>
                </form>
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["length"]) && isset($_POST["width"])) {
                    $length = $_POST["length"];
                    $width = $_POST["width"];
                
                    echo '<div class="result-box ';
                    if (!empty($length) && !empty($width)) {
                        if ($length == $width) {
                            echo 'true-result">';
                            echo "<p>Võimalik, see on ruut</p>";
                        } else {
                            echo 'true-result">';
                            echo "<p>Võimalik, see on ristkülik</p>";
                        }
                    } else {
                        echo 'false-result">';
                        echo "<p>Pikkus või laius on puudu</p>";
                    }
                    echo '</div>';
                }
                ?>
            </div>

           
            <div class="col-md-6 mt-5">
                <h4>Juubel</h4>
                <form method="post" action="">
                    <div class="form-group">
                        <label for="birth_year">Sünniaasta:</label>
                        <input type="number" class="form-control" id="birth_year" name="birth_year" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Kontrolli</button>
                </form>
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["birth_year"])) {
                    $birth_year = $_POST["birth_year"];
                
                    echo '<div class="result-box ';
                    if (!empty($birth_year)) {
                        $current_year = date("Y");
                        $age = $current_year - $birth_year;
                    
                        if ($age % 5 == 0) {
                            echo 'true-result">';
                            echo "<p>Tegemist on juubeliaastaga</p>";
                        } else {
                            echo 'false-result">';
                            echo "<p>Tegemist ei ole juubeliaastaga</p>";
                        }
                    } else {
                        echo 'false-result">';
                        echo "<p>Sünniaasta on puudu</p>";
                    }
                    echo '</div>';
                }
                ?>
            </div>

            
            <div class="col-md-6 mt-5">
                <h4>Hinne</h4>
                <form method="post" action="">
                    <div class="form-group">
                        <label for="points">KT punktid:</label>
                        <input type="number" class="form-control" id="points" name="points" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Kontrolli</button>
                </form>
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["points"])) {
                    $points = $_POST["points"];
                
                    echo '<div class="result-box ';
                    if (!empty($points)) {
                        switch ($points) {
                            case $points > 10:
                                echo 'true-result">';
                                echo "<p>SUPER!</p>";
                                break;
                            case $points >= 5 && $points <= 9:
                                echo 'true-result">';
                                echo "<p>TEHTUD!</p>";
                                break;
                            case $points < 5:
                                echo 'false-result">';
                                echo "<p>KASIN!</p>";
                                break;
                            default:
                                echo 'false-result">';
                                echo "<p>SISESTA OMA PUNKTID!</p>";
                        }
                    } else {
                        echo 'false-result">';
                        echo "<p>KT punktid on puudu</p>";
                    }
                    echo '</div>';
                }
                ?>
            </div>

            <div class="col-md-6 mt-5">
                <h4>Ristkülik või ruut II</h4>
                <form method="post" action="">
                    <div class="form-group">
                        <label for="side1">Pikkus:</label>
                        <input type="number" class="form-control" id="side1" name="side1" required>
                    </div>
                    <div class="form-group">
                        <label for="side2">Laius:</label>
                        <input type="number" class="form-control" id="side2" name="side2" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Kontrolli</button>
                </form>
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["side1"]) && isset($_POST["side2"])) {
                    $side1 = $_POST["side1"];
                    $side2 = $_POST["side2"];
                
                    echo '<div class="result-box ';
                    if (!empty($side1) && !empty($side2)) {
                        if ($side1 == $side2) {
                            echo 'true-result">';
                            echo "<p>Võimalik, see on ruut</p>";
                        } else {
                            echo 'true-result">';
                            echo "<p>Võimalik, see on ristkülik</p>";
                        }
                    } else {
                        echo 'false-result">';
                        echo "<p>Pikkus või laius on puudu</p>";
                    }
                    echo '</div>';
                }
                ?>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
