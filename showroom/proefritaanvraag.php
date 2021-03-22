<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/mainstyle.css" type="text/css">
    <link rel="stylesheet" href="../css/proefenofferte.css" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>V!st@Cars - Proefritaanvraag</title>
</head>

<body>
    <nav>
    <section class="navContainer">

        <div class="logoWrapper"> <a href="index.php"><img src="../images/vistacars.V3.png" alt="V!ist@ Cars" style="width:12vh;height:11vh;"></a> </div>
        <nav class="navMenu">
            <ul class="navList">
                <li class="navItem"><a class="navLink" href="../index.php">Home</a></li>     
            </ul>
            <ul class="navList">
                <li class="navItem"><a class="navLink" href="index.php">Showroom</a></li>     
            </ul>
            <ul class="navList">
                <li class="navItem"><a class="navLink" href="../contact.php">Contact</a></li>     
            </ul>
        </nav>
    </section> 
    </nav> 
<?php

    require_once ('../showroom/includes/connection.inc.php');

        $sql = "SELECT merk, model, kenteken, vraagprijs FROM tb_cars WHERE id =" . $_GET['idauto'];

        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();

        $sql = "SELECT name_image FROM tb_image WHERE auto_id =" . $_GET['idauto'] . " LIMIT 1";

        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $resultimage = $stmt->fetchAll();

        // print_r($resultimage);

    foreach($result as $key => $row) {

        $proefrit= "<div class= 'proef'>";

        foreach($resultimage as $key2 => $row2) {
            $proefrit .= "<img src='../includes/showroom/dbimages/" . $row2['name_image'] . "' width='200px'>";
        }

        $proefrit .= "<b><h2>Proefrit aanvragen</h2></b>" . " " . "U wilt een proefrit aanvragen voor de" . " " . "<b>" .
            $row['merk'] . " " . $row['model'] . " " . "van" . " &euro;" . $row['vraagprijs'] . " " . "</b>" .
            "met het kenteken" . " " . "<b>" . $row['kenteken'] . "</b> " . "<p id='click'><label for='phone'>Vul hier uw telefoonnummer in: </label><input class='telefoon' type='tel' id='phone' name='phone' autocomplete='off'>" . " " . 
             "</br>Wij bellen u zo spoedig mogelijk terug voor het maken van een afspraak." . "</br></br>" . "<button class='button button1' onclick='verzend()'>Verzenden</button>" . "</br></br>" . "Team V!st@Cars" . "</p>";
        
        $proefrit .="<div class='voorwaarden'>voorwaarden:</br> De proefrit kan bij de garage of bij u thuis gereden worden (De proefrit thuis kan alleen doorgaan als de klant in een straal van 25km rond de locatie van de garage woont, waar de auto zich bevindt).";
        $proefrit .="</br>De garagemedewerker die de auto bij u thuis aflevert gebruikt de hele rit een mondkapje.";
        $proefrit .="</br>Het stuur, dashboard, de stuurhendels en versnellingspook van de auto worden voor en na de proefrit grondig gereinigd.";
        $proefrit .="</br>De klant is verplicht om tijdens de gehele proefrit een mondkapje te dragen.</div></div>";

        echo $proefrit;

    }
?>

<script>

function verzend() {

  document.getElementById('click').innerHTML = 'Uw aanvraag is verzonden';
  document.getElementById('click').style.color = '#33d222';
 
}

</script>
</div>

    <footer>
          <div class="footer">
            <div id="footercrtext">&copy; V!st@Cars(2021)</div>
            <div id="footerteltext">Telefoonnummer: 06 12345678</div>
            <a href="login/index.php" id="loginbtn">Inloggen</a>
          </div>
    </footer>        
</div>
</body>
</html>