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
    <h1 class="text-center mt-5">Harjutus5</h1>
    <div class="container">
        <div class="result-box">
            <h4>Tüdrukud</h4>

            <?php
            //tydrukud
            $tydrukud = array("Liisa", "Anna", "Laura", "Maria", "Kristiina", "Kadri", "Kärt", "Eve");

           
            sort($tydrukud);

            
            $ridadearv = 4;
            $tydrukutearv = count($tydrukud); 
            $ridadekoguarv = ceil($tydrukutearv / $ridadearv); 

        
            for ($rida = 0; $rida < $ridadekoguarv; $rida++) {
                echo '<div class="row">';
            
                for ($veerg = 0; $veerg < $ridadearv; $veerg++) {
                    $indeks = $rida * $ridadearv + $veerg;
                    if ($indeks < $tydrukutearv) {
                        echo '<div class="col">' . $tydrukud[$indeks] . '</div>';
                    }
                }
                echo '</div>';
            }

        
            ?>
    
    <div class="container">
        <div class="result-box">
            <h4>Tüdrukud II</h4>

        <?php
            //tydrukud 2
            $tydrukud = array("Liisa", "Anna", "Laura", "Maria", "Kristiina", "Kadri", "Kärt", "Eve");

            
            sort($tydrukud);

           
            echo "<h5>Esimene kolmest nimest:</h5>";
            for ($i = 0; $i < 3; $i++) {
                echo "<p>" . $tydrukud[$i] . "</p>";
            }

            
            echo "<h5>Viimane nimi:</h5>";
            $viimanenimi = end($tydrukud);
            echo "<p>" . $viimanenimi . "</p>";

            
            echo "<h5>Suvaline nimi:</h5>";
            $suvalineindeks = array_rand($tydrukud);
            echo "<p>" . $tydrukud[$suvalineindeks] . "</p>";
            ?>

            <?php

            //Automargid
            $autode_margid= array("Toyota", "Audi", "BMW", "Mercedes", "Volkswagen", "Ford");

            //Autode VIN-koodid
            $autode_vin_koodid = array(
                "Toyota" => array("JTDKB20U573369123", "JT2AW16J1M0123456", "JT2AE09W2K0123456"),
                "Audi" => array("WAUZZZ4G1EN123456", "WAUBH24B0LN123456", "WAUZZZ8T1BA123456"),
                "BMW" => array("WBACB71030F123456", "WBAFA31090L123456", "WBA3A31080F123456"),
                "Mercedes" => array("WDDGF4HB8DR123456", "WDDKJ5HB0FF123456", "WDCGG5HB3FG123456"),
                "Volkswagen" => array("WVWZZZ1HZWP123456", "WVWZZZ3CZTE123456", "WVWZZZAAZED123456"),
                "Ford" => array("1FAHP2DW9CG123456", "1FMCU0D76CK123456", "1FM5K8D89FG123456")
            );

            //Autode arvu leidmine
            $autode_arv = count($autode_margid);
            echo "Autode arv: $autode_arv <br>";

            //Massiivi pikkuste kontrollimine
            $markide_arv = count($autode_margid);
            $vin_koodid = count($autode_vin_koodid);
            if ($markide_arv == $vin_koodid) {
                echo "Massiivid on ühepikkused<br>";
            } else {
                echo "Massiivid ei ole ühepikkused<br>";
            }

            //Toyota ja Audi eraldi arvu leidmine
            $toyota_arv = count($autode_vin_koodid["Toyota"]);
            $audi_arv = count($autode_vin_koodid["Audi"]);
            echo "Toyotade arv: $toyota_arv<br>";
            echo "Audide arv: $audi_arv<br>";

            
            echo "VIN koodid, mille märkide arv on väiksem kui 17: <br>";
            foreach ($autode_vin_koodid as $mark => $vin_koodid) {
                foreach ($vin_koodid as $vin_kood) {
                    if (strlen($vin_kood) < 17) {
                        echo "$autode_vin_koodid <br>";
                        
                    }
                }
            }

            ?>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
