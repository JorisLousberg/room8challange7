<?php

    require_once ('connection.inc.php');
   
        $sql = "SELECT * FROM tb_cars WHERE id =" . $_GET['idauto'];

        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();

        //print_r($result);
  
        $sql = "SELECT name_image FROM tb_image WHERE auto_id =" . $_GET['idauto'] . " LIMIT 4";

        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $resultimage = $stmt->fetchAll();
        $fotoautos = "<div id='fotobox'>";

        foreach($resultimage as $key2 => $row2) {
          $fotoautos .= "<img src='dbimages/" . $row2['name_image'] . "' width='400px'>";
      }
      $fotoautos .= "</div>";

      echo $fotoautos;

    foreach($result as $key => $row) {
    
            // $autotitle = "<div class='hoofdtitel'>"; // generate string with HTML, using the retrieved database values
            // $autosignature = "<div class='kenmerk'>";
            
            $vraagprijs = "&euro; " . $row['vraagprijs'];
            $merk = $row['merk'];
            $model = $row['model'];
            $bouwjaar = $row['bouwjaar'];
            $kleur = $row['kleur'];
            $deur = $row['deuren'];
            $versnel = $row['versnellingen'];
            $transmissie = $row['transmissie'];
            $brandstof = $row['brandstof'];
            $gewicht = $row['gewicht'];
            $km = $row['kmstand'] . " km";
            $airco = $row['airco'];
            $abs = $row['abs_optie'];
            $apk = $row['apk'];
            $stuurbekracht = $row['stuurbekrachtiging'];
            $fullcarname = $merk . " " .$model;


            


            // $autotitle .= "<div class='abutton'><a href='../includes/proefritaanvraag.inc.php?idauto=" . $row['id'] ."'><img src='../images/proefrit.png' width='45'></a>" . " " . "<a href='../includes/offerteaanvraag.inc.php?idauto=" . $row['id'] ."'><img src='../images/offerte.png' width='45'></a>" . "</div>";
            // $autosignature .= "<div class='row'><div class='column'>Status: " . $row['status'] . "</br>" . "Bouwjaar: " . $row['bouwjaar'] . "</br>" . "KM stand: " . $row['kmstand'] . "</br>" . "Kenteken: " . $row['kenteken'] . "</br>" . "Kleur: " . $row['kleur'] . "</br>" . "APK: " . $row['apk'] . "</br>" . "Stuurbekrachtiging: " . $row['stuurbekrachtiging'] . "</div>" . 
            // "<div class='column'>Airbag: " . $row['airbag'] . "</br>" . "Brandstof: " . $row['brandstof'] . "</br>" . "Gewicht: " . $row['gewicht'] . "</br>" . "Transmissie: " . $row['transmissie'] . "</br>" . "Deuren: " . $row['deuren'] . "</br>" . "Airco: " . $row['airco'] . "</br>" . "ABS optie: " . $row['abs_optie'] . "</div></div>";

    // $autotitle .= "</div>";
    // $autosignature .= "</div>";
 
    // echo $autotitle;
    // echo $autosignature;    
    // echo $fotoautos;

 }

?>
</body>
</html>