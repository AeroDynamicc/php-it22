<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harjutused</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    .seasons {
        display: flex;
    }

    .season {
        margin-right: 10px;
    }

    .season img {
        width: 180px;
        height: 180px;
    }


    </style>
</head>
<body>
        

    <h1 class="text-center mt-5">Harjutus8</h1>

            <h5>Aasta, kuupäev ja kellaaeg</h5>
            <?php
           
            echo date('d.m.Y G:i' , time());


            ?>

            <h5>Kasutaja vanus</h5>
            <?php
            function vanuse_arvutamine($synniaasta) {
                
                $praegune_aasta = date("Y");

                
                $vanus = $praegune_aasta - $synniaasta;

                
                return $vanus;
            }

            
            $synniaasta = 2006;

            
            echo "Vanus: " . vanuse_arvutamine($synniaasta) . " aastane<br>";

            
            if ($synniaasta > date("Y")) {
                $vanus_kasutaja_saab_aastal = $synniaasta - date("Y");
                echo "Vanus, mille saad käesoleval aastal: " . $vanus_kasutaja_saab_aastal . " aastat";
            }
            ?>

            <h5>Kooliaasta lõpupäevad</h5>
            <?php
            
            $kooliaasta_lopp = strtotime("2024-06-10");

            $praegune_kuupaev = time();

            $paevi_kooliaasta_lopuni = ($kooliaasta_lopp - $praegune_kuupaev) / (60 * 60 * 24);

            echo "2024 kooliaasta lõpuni on jäänud " . round($paevi_kooliaasta_lopuni) . " päeva!";
            ?>

            <h5>Aastaaegade pildid</h5>
            
            </div>

            <div class="seasons">
            <div class="season">
                <img src="kevad.jpg" alt="kevad">
                <p>Kevad</p>
            </div>
            <div class="season">
                <img src="suvi.jpg" alt="suvi">
                <p>Suvi</p>
            </div>
            <div class="season">
                <img src="sügis.jpg" alt="Sügis">
                <p>Sügis</p>
            </div>
            <div class="season">
                <img src="talv.jpg" alt="Talv">
                <p>Talv</p>
            </div>
            </div>

        
            



        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
