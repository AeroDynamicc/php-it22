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
        

    <h1 class="text-center mt-5">Harjutus6</h1>

            <h5>Arvud 1-100 koos punktidega</h5>
                <?php
                $count = 1;
                for ($i = 1; $i <= 100; $i++) {
                    echo $i . '. ';
                    if ($count % 10 == 0) {
                        echo '<br>';
                    }
                    $count++;
                }
                ?>
        
            <h5>Rida</h5>

                <?php
                //tärnid
                $stars = 10;
                
                for ($i = 0; $i < $stars; $i++) {
                    echo '*';
                }
                ?>




            <h5>Rida II</h5>
                <?php
                //tärnid II
                $stars = 10;
                
                for ($i = 0; $i < $stars; $i++) {
                    echo '* <br>';
                }
                ?>


            <h5>Ruut</h5>

            <form method="post" action="">
            <div class="form-group">
            <label for="size">Sisesta ruudu suurus:</label>
            <input type="number" class="form-control" id="size" name="size" required>
            </div>
            <button type="submit" class="btn btn-primary">Kuva ruut</button>
            </form>
            <br>

            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["size"])) {
                    $size = $_POST["size"];

                    
                    for ($i = 0; $i < $size; $i++) {
                        for ($j = 0; $j < $size; $j++) {
                            echo '* ';
                        }
                        echo '<br>';
                    }
                }
                ?>
            
            <h5>Kahanev</h5>

                    <?php
                    
                    for ($i = 10; $i >= 1; $i--) {
                        if ($i % 2 == 0) {
                            echo '<li class="list-group-item">' . $i . '</li>';
                        }
                    }
                    ?>

            <h5>Kolmega jagunevad</h5>
            
                    
                    <?php
                    
                    for ($i = 1; $i <= 100; $i++) {
                        if ($i % 3 == 0) {
                            echo '<li class="list-group-item">' . $i . '</li>';
                        }
                    }
                    ?>
                
            <h5>Massiivid ja tsüklid</h5>
                    <?php
                    
                    $girls = array("Mary", "Anna", "Emma", "Sophia", "Olivia");
                    $boys = array("John", "William", "James", "Michael", "Robert");

                   
                    for ($i = 0; $i < count($girls); $i++) {
                        echo '<li class="list-group-item">' . $boys[$i] . ' ja ' . $girls[$i] . '</li>';
                    }
                    ?>
            <h5>Massiivid ja tsüklid (bonus)</h5>
                    <?php
                    
                    $girls = array("Mary", "Anna", "Emma", "Sophia", "Olivia");
                    $boys = array("John", "William", "James", "Michael", "Robert");

                    
                    $copiedGirls = $girls;
                    $copiedBoys = $boys;

                    
                    shuffle($copiedGirls);
                    shuffle($copiedBoys);

                    
                    for ($i = 0; $i < count($girls); $i++) {
                        echo '<li class="list-group-item">' . $copiedBoys[$i] . ' ja ' . $copiedGirls[$i] . '</li>';
                    }
                    ?>
                    
    </div>
    


        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
