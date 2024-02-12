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
            $autode_markid = array("Subaru","BMW","Acura","Mercedes-Benz","Lexus","GMC","Volvo","Toyota","Volkswagen","Volkswagen","GMC","Jeep","Saab","Hyundai","Subaru","Mercedes-Benz",
            "Honda","Kia","Mercedes-Benz","Chevrolet","Chevrolet","Porsche","Buick","Dodge","GMC","Dodge","Nissan","Dodge","Jaguar","Ford","Honda","Toyota","Jeep",
            "Kia","Buick","Chevrolet","Subaru","Chevrolet","Chevrolet","Pontiac","Maybach","Chevrolet","Plymouth","Dodge","Nissan","Porsche","Nissan","Mercedes-Benz",
            "Suzuki","Nissan","Ford","Acura","Volkswagen","Lincoln","Mazda","BMW","Mercury","Mitsubishi","Ram","Audi","Kia","Pontiac","Toyota","Acura","Toyota","Toyota",
            "Chevrolet","Oldsmobile","Acura","Pontiac","Lexus","Chevrolet","Cadillac","GMC","Jeep","Audi","Acura","Acura","Honda","Dodge","Hummer","Chevrolet","BMW",
            "Honda","Lincoln","Hummer","Acura","Buick","BMW","Chevrolet","Cadillac","BMW","Pontiac","Audi","Hummer","Suzuki","Mitsubishi","Jeep","Buick","Ford"
            );

            $vin_koodid = array("1GKS1GKC8FR966658", "1FTEW1C87AK375821", "1G4GF5E30DF760067", "1FTEW1CW9AF114701", "WAUGGAFC8CN433989", "3G5DA03E83S704506", "4JGDA2EB0DA207570", 
            "1FTEW1E88AK070552", "SAJWA0F77F8732763", "JHMFA3F21BS660717", "JTHBP5C29C5750730", "WA1LFAFP9DA963060", "3D7TT2CT6BG521976", "WVWN7EE961049", 
            "2C3CA5CG3BH341234", "YV4952CFXC162587", "KNALN4D71F5805172", "JN1CV6EK7BM903692", "5FRYD3H84EB186765", "WAUL64B83N441878", "WDDGF4HBXCF845665", 
            "WAUKF78E45A133973", "JN1BY0AR2AM022612", "WA1EY74L69D931520", "3GYFNGEYXBS290465", "1D7CW2GK4AS059336", "JN8AZ1FY5EW087447", "WAUBF78E57A343355", 
            "SCFFBCCD8AG695133", "WBAWC73548E143482", "3GYFNGE38DS093883", "SCBCP73WC348460", "JN8AE2KPXE9353316", "2C3CDXDT2EH018229", "1G6AH5SX7D0325662", 
            "WVWED7AJ7DW431402", "1FTKR1AD3AP316066", "WBAKF5C52CE612586", "1FTNX2A57AE16083", "WAUCFAFR1AA166821", "SCFFDAAM3EG486065", "1G4PR5SK5F4821043", 
            "1C3CDFCB4ED858321", "1N6AD0CW8EN722090", "1NXBU4EE0AZ438077", "2T1BPRHE7FC131594", "JH4KB1637C451183", "1C4NJCBA7ED747024", "WAUHF68P86A736691", 
            "3D7TT2HT1AG96429", "5GADX23L96D250838", "5FRYD3H25FB985936", "1G4GG5E30DF126304", "KNADH5A38B6072755", "WAUBFAFL1BA477979", "3C63DRL4CG674293", 
            "1G6AR5SX0E0834815", "1NXBU4EE2AZ309838", "WAUKGBFB4AN797783", "JN1AJ0HP8AM801887", "WAUPL68E25A448831", "WA1C8BFP3FA535374", "WAUHE78P78A019744", 
            "TRURD38J081400551", "1G4HP52K95428171", "5N1CR2MN1EC607241", "5UMDU93417L322773", "1G6AJ5S35F09585", "JN1CV6AP3BM234743", "SCBCR63W66C842051", 
            "SCFFDCBD2AG509467", "WBA3C1C58CA664091", "1D7RW2BK6BS922303", "WAUDH98E67A546009", "2HNYB1H46CH683844", "3VW467AT4DM257275", "WDDGF4HB7CA515172", 
            "2G61W5S88E9666199", "5GADV33W17D256205", "2C3CDXDT9CH683075", "2G4GU5X0E9989574", "WAUJC58E53A641651", "WDDEJ7KB3CA053774", "3D73M3CL6AG890452", 
            "5GAER13D19J026924", "1G4HC5EM1BU329204", "3VWML7AJ6CM772736", "3C6TD4HT2CG011211", "JTDZN3EU2FJ023675", "JN8AZ1MU4CW041721", "KNAFX5A82F5991024", 
            "1N6AA0CJ1D57470", "WAUEG98E76A780908", "WAUAF78E96A920706", "1GT01XEG8FZ268942", "1FTEW1CW4AF371278", "JN1AZ4EH8DM531691", "WAUEKAFBXAN294295", 
            "1N6AA0EDXFN868772", "WBADW3C59DJ422810"
            );

        // Leia autode arv (count)
        $autode_arv = count($autode_markid);
        echo "<p>Autode arv: $autode_arv</p>";

        // Kontrolli, kas massiivid on ühepikkused
        if (count($autode_markid) == count($vin_koodid)) {
            echo "<p>Massiivid on ühepikkused.</p>";
        } else {
            echo "<p>Massiivid ei ole ühepikkused.</p>";
        }

        // Leia eraldi Toyotade ja Audide arv nimekirjas
        $toyota_arv = 0;
        $audi_arv = 0;

        foreach ($autode_markid as $mark) {
            if ($mark == "Toyota") {
                $toyota_arv++;
            } elseif ($mark == "Audi") {
                $audi_arv++;
            }
        }

        echo "<p>Toyotade arv: $toyota_arv</p>";
        echo "<p>Audide arv: $audi_arv</p>";

        // Leia ja väljasta VIN koodid, mille märkide arv on väiksem kui 17
        echo "<p>VIN koodid, mille märkide arv on väiksem kui 17:</p>";
        foreach ($vin_koodid as $vin) {
            if (strlen($vin) < 17) {
                echo "$vin <br>";
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

            $hiina_nimed = array("瀚聪","月松","雨萌","展博","雪丽","哲恒","慧妍","博裕","宸瑜","奕漳",
            "思宏","伟菘","彦歆","睿杰","尹智","琪煜","惠茜","晓晴","志宸","博豪",
            "璟雯","崇杉","俊誉","军卿","辰华","娅楠","志宸","欣妍","明美");

            
            sort($hiina_nimed);
            
            echo "<br>Esimene nimi: " . $hiina_nimed[0] . "<br>";
            echo "Viimane nimi: " . end($hiina_nimed);

            ?>
            
            <?php

            echo "<h5>Goolgel </h5>";

            $nimed = array(
            "Feake","Bradwell","Dreger","Bloggett","Lambole","Daish","Lippiett",
            "Blackie","Stollenbeck","Houseago","Dugall","Sprowson","Kitley","Mcenamin",
            "Allchin","Doghartie","Brierly","Pirrone","Fairnie","Seal","Scoffins",
            "Galer","Matevosian","DeBlase","Cubbin","Izzett","Ebi","Clohisey",
            "Prater","Probart","Samwaye","Concannon","MacLure","Eliet","Kundt","Reyes"
        );

        //Nimeotsing
        $message = '';

        
        if(isset($_GET['search'])) {
            $searchTerm = $_GET['search'];
            if(in_array($searchTerm, $nimed)) {
                $message = "<strong>$searchTerm</strong> leiti listist.";
                $alertClass = 'alert-success';
            } else {
                $message = "<strong>$searchTerm</strong> ei leitud listist.";
                $alertClass = 'alert-danger';
            }
        }
        ?>

        <?php if(!empty($message)): ?>
            <div class="alert <?php echo $alertClass; ?>" role="alert">
                <?php echo $message; ?>
            </div>
        <?php endif; ?>

        <form method="GET">
            <div class="form-group">
                <label for="search">Otsing</label>
                <input type="text" class="form-control" id="search" name="search" placeholder="Sisesta nimi">
            </div>
            <button type="submit" class="btn btn-primary">Otsi</button>
        </form>

        </div>

        <?php

        // Pildid massiiv
        
        $pildid = ["prentice.jpg", "freeland.jpg", "peterus.jpg", "devlin.jpg", "gabriel.jpg", "pete.jpg"];
            foreach ($pildid as $pilt) {
                echo '
                <div class="col-md-2">
                    <img src="\img\prentice' . $pilt . '" alt="' . basename($pilt, ".jpg") . '" class="img-fluid rounded-circle mb-3">
                </div>';
            }

        
        
        ?>
    </div>
    


        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
