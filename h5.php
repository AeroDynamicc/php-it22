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

            
            
            <h4>Automargid</h4>

            <?php
            //automargid
            $autode_margid = array("Toyota", "Audi", "BMW", "Mercedes");
            $autode_vin_koodid = array(
            "Toyota" => array("JTDBE32KX00300001", "JTDBE32KX00300002", "JTDBE32KX00300003"),
            "Audi" => array("WAUZZZ4LXCD00001", "WAUZZZ4LXCD00002"),
            "BMW" => array("WBAAM3333D1234567", "WBAAM3333D1234568", "WBAAM3333D1234569"),
            "Mercedes" => array("WDDNG7DBXCA123456", "WDDNG7DBXCA123457")
            );

            //autode arvu leidmine
            $autode_arv = count($autode_margid);
            echo "Autode arv: $autode_arv<br>";

            //Massiivipikkuse kontrollimine
            $markide_arv = count($autode_margid);
            $vin_koodide_arv = count($autode_vin_koodid);
            if ($markide_arv == $vin_koodide_arv) {
                echo "Massiivid on ühepikkused<br>";
            } else {
                echo "Massiivid ei ole ühepikkused<br>";
            }

            //Toyotade ja Audide eraldi leidmine massiivist
            $toyota_arv = count($autode_vin_koodid["Toyota"]);
            $audi_arv = count($autode_vin_koodid["Audi"]);
            echo "Toyotade arv: $toyota_arv<br>";
            echo "Audide arv: $audi_arv<br>";

            
            echo "VIN koodid, mille märkide arv on väiksem kui 17: <br>";
            foreach ($autode_vin_koodid as $mark => $vin_koodid) {
                foreach ($vin_koodid as $vin_kood) {
                    if (strlen($vin_kood) < 17) {
                        echo "$vin_kood<br>";
                        
                    }
                }
            }

            ?>

    
        
            <h4>Palgad</h4>

            <?php
            //palk
            $palgad_2018 = array(1220,1213,1295,1312,1298,1354,1296,1286,1292,1327,1369,1455);

            
            $palkade_summa = array_sum($palgad_2018);

            
            $palkade_arv = count($palgad_2018);

            
            $keskmine_palk = $palkade_summa / $palkade_arv;

            echo "2018 aasta palkade keskmine: " . number_format($keskmine_palk, 2) ."<br>";
            ?>

    
        
            <h4>Firmad</h4>


            <?php

            //firma           
            $firma_nimed = array("Kimia", "Mynte", "Voomm", "Twiyo", "Layo", "Talane", "Gigashots", "Tagchat", "Quaxo", "Voonyx", "Kwilith", "Edgepulse", "Eidel", "Eadel", "Jaloo", "Oyope", "Jamia");

            sort($firma_nimed);

            echo "<h5>Firmade nimed: </h5>";
            foreach ($firma_nimed as $firma) {
                echo $firma ."<br>";
            }

            
            if (isset($_GET['eemalda']) && !empty($_GET['eemalda'])) {
                $eemaldatav_nimi = $_GET['eemalda'];
                $index = array_search($eemaldatav_nimi, $firma_nimed);
                if ($index !== false) {
                    unset($firma_nimed[$index]);
                }
            }

            
            echo "<h5>Korrastatud firma nimed: </h5>";
            foreach ($firma_nimed as $firma) {
                echo $firma ."<br>";
            }

            //riigid
            $riigid = array("Canada", "Brazil", "France", "Russia", "Kazakhstan", "Portugal");

            sort($riigid);


            $pikim_riik = '';
            foreach ($riigid as $riik) {
                if (strlen($riik) > strlen($pikim_riik)) {
                    $pikim_riik = $riik;
                }
            }

            echo "<br>Kõige pikema riigi nime märkide arv: ". strlen($pikim_riik);
            ?>

            <?php





            ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
