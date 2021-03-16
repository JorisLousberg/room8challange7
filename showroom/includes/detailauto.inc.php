<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../csstemplates/main.css" type="text/css">
    <link rel="stylesheet" href="../csstemplates/occasion.css" type="text/css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;1,300&display=swap" rel="stylesheet">
    <title>V!st@Cars - detail auto</title>
</head>

<body> 
 
    <ul>
        <li><a href="../index.php">Home</a></li>
        <li><a href="../occasions.php">Showroom</a></li>
        <li><a href="../info.php">Informatie</a></li>
        <li><a href="../contact.php">Contact</a></li>
    </ul>

<?php

    require_once ('./connection.inc.php');
   
        $sql = "SELECT * FROM tb_cars WHERE id =" . $_GET['idauto'];

        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();

        //print_r($result);
  
        $sql = "SELECT name_image FROM tb_image WHERE auto_id =" . $_GET['idauto'];

        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $resultimage = $stmt->fetchAll();
        $fotoautos = " ";

        foreach($resultimage as $key2 => $row2) {
          $fotoautos .= "<img src='../dbimages/" . $row2['name_image'] . "' width='400px'>";
      }

    foreach($result as $key => $row) {
    
            $autotitle = "<div class='hoofdtitel'>"; // generate string with HTML, using the retrieved database values
            $autosignature = "<div class='kenmerk'>";
    
            $autotitle .= $row['merk'] . " " . $row['model'] . " &euro; " . $row['vraagprijs'] . " ";
            $autotitle .= "<div class='abutton'><a href='../includes/proefritaanvraag.inc.php?idauto=" . $row['id'] ."'><img src='../images/proefrit.png' width='45'></a>" . " " . "<a href='../includes/offerteaanvraag.inc.php?idauto=" . $row['id'] ."'><img src='../images/offerte.png' width='45'></a>" . "</div>";
            $autosignature .= "<div class='row'><div class='column'>Status: " . $row['status'] . "</br>" . "Bouwjaar: " . $row['bouwjaar'] . "</br>" . "KM stand: " . $row['kmstand'] . "</br>" . "Kenteken: " . $row['kenteken'] . "</br>" . "Kleur: " . $row['kleur'] . "</br>" . "APK: " . $row['apk'] . "</br>" . "Stuurbekrachtiging: " . $row['stuurbekrachtiging'] . "</div>" . 
            "<div class='column'>Airbag: " . $row['airbag'] . "</br>" . "Brandstof: " . $row['brandstof'] . "</br>" . "Gewicht: " . $row['gewicht'] . "</br>" . "Transmissie: " . $row['transmissie'] . "</br>" . "Deuren: " . $row['deuren'] . "</br>" . "Airco: " . $row['airco'] . "</br>" . "ABS optie: " . $row['abs_optie'] . "</div></div>";

    $autotitle .= "</div>";
    $autosignature .= "</div>";
 
    echo $autotitle;
    echo $autosignature;    
    echo $fotoautos;

 }

?>

<div id="footerbalk">
  <p class="logo">V!ST@CARS © 2021</p>
</div></div>
  

</body>
</html>