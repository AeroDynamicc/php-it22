<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harjutused</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
        

    <h1 class="text-center mt-5">Harjutus7</h1>


            <?php
            function tervita(){
            return "Tere päiksekene!";
            }
            echo tervita();
        
            ?>       

        <h5>Liitu meie uudiskirjaga:</h5>
            <?php

            //Vormi genereerimine
            function generateNewsletterForm() {
                echo '
                <form method="post" action="#">
                    <div class="form-group">
                        <label for="email">E-posti aadress:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Liitu</button>
                </form>';
            }

            
            generateNewsletterForm();
            ?>

            <h5>Maili loomine</h5>
            <?php
            
            //maili loomine
            function loo_email($kasutajanimi) {
                $kasutajanimi_vaike = strtolower($kasutajanimi);

                
                $kood = substr(str_shuffle("abcdefghijklmnopqrstuvwxyz0123456789"), 0, 7);

                
                $email = $kasutajanimi_vaike . "@hkhk.edu.ee";

                
                return $email;
            }

            
            $kasutajanimi = "Kasutaja";

        
            echo "Loodud email: " . loo_email($kasutajanimi);


            ?>
            <h5>Arvude genereerimine</h5>
            <?php
            function genereeri_arvud($algus, $lopp, $samm = 1) {
            // Veendu, et algus oleks väiksem kui lõpp
            if ($algus > $lopp) {
                list($algus, $lopp) = array($lopp, $algus);
            }

            // Genereeri arvud vahemikus algus kuni lõpp sammuga $samm
            for ($i = $algus; $i <= $lopp; $i += $samm) {
                echo $i . " ";
            }
            }

            // Näiteks: arvud vahemikus 2 kuni 8, sammuga 1
            genereeri_arvud(2, 8);
            echo "<br>";

            // Näiteks: arvud vahemikus 2 kuni 8, sammuga 3
            genereeri_arvud(2, 8, 3);
            ?>

            <h5>Ristküliku pindala</h5>

            <?php
            function ristkyliku_pindala($pikkus, $laius) {
                
            $pindala = $pikkus * $laius;
            return $pindala;
            }

            
            $pikkus = 5;
            $laius = 3;

            
            echo "Ristküliku pindala on: " . ristkyliku_pindala($pikkus, $laius);
            ?>

            <h5>Isikukood</h5>
            <?php
            function kontrolli_isikukood($isikukood) {
                //kontrollin, kas isikukood on õige pikkusega (11 märki)
                if (strlen($isikukood) == 11) {
                    //võtan isikukoodist sünniaasta, kuu ja päeva
                    $sunniaasta = substr($isikukood, 1, 2);
                    $sunnikuu = substr($isikukood, 3, 2);
                    $sunnipaev = substr($isikukood, 5, 2);

                   
                    $sugu = ($isikukood[0] % 2 == 0) ? 'Naine' : 'Mees';

                    
                    $sunniaasta = ($isikukood[0] < 3) ? '20' . $sunniaasta : '19' . $sunniaasta;

                    
                    $synniaeg = $sunnipaev . '.' . $sunnikuu . '.' . $sunniaasta;

                    
                    return "Isikukood on õige.<br> Sugu: $sugu<br> Sünniaeg: $synniaeg";
                } else {
                    
                    return "Isikukood peab olema 11 märki pikk.";
                }
            }

            
            $isikukood = '49403106727';
            echo kontrolli_isikukood($isikukood);
            ?>

            <h5>Hääd mõtted</h5>
            <?php
            function genereeri_lause() {
                
                $alus = array("Täna", "Homme", "Ülehomme");
                $oeldis = array("söön", "jooksen", "õpin");
                $sihitis = array("koolis", "kodus", "pargis");

                
                $valitud_alus = $alus[array_rand($alus)];
                $valitud_oeldis = $oeldis[array_rand($oeldis)];
                $valitud_sihitis = $sihitis[array_rand($sihitis)];


                
                $lause = "$valitud_alus $valitud_oeldis $valitud_sihitis.";

                
                return $lause;
            }

            // Kutsu funktsioon välja ja prindi genereeritud lause
            echo genereeri_lause();
            ?>




    </div>
    


        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
