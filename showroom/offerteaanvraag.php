<?php 
session_start();
    if(empty($_SESSION['username'])) {
        $portalbtn = "Inloggen";
    } else {
        $portalbtn = "Portal";
    }
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/mainstyle.css" type="text/css">
    <link rel="stylesheet" href="../css/proefenofferte.css" type="text/css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;1,300&display=swap" rel="stylesheet">
    <title>V!st@Cars - Offerteaanvraag</title>
</head>

<body> 
<nav>
    <section class="navContainer">
            <div class="logoWrapper"> <a href="../index.php"><img src="../images/vistacars.V3.png" alt="V!ist@ Cars" style="width:12vh;height:11vh;"></a> </div>
        <nav class="navMenu">
            <ul class="navList">
                <li class="navItem"><a class="navLink" href="../index.php">Home</a></li>     
            </ul>
            <ul class="navList">
                <li class="navItem"><a class="navLink" href="../showroom/">Showroom</a></li>     
            </ul>
            <ul class="navList">
                <li class="navItem"><a class="navLink" href="../contact.php">Contact</a></li>     
            </ul>
        </nav>
    </section>
</nav>
<div class="pagecon">
<?php
    require_once ('includes/connection.inc.php');

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

        $offerte= "<div class='proef'>";

        foreach($resultimage as $key2 => $row2) {
            $offerte .= "<img src='../dbimages/" . $row2['name_image'] . "' width='200px'>";
        }

        $offerte .= "<b><h2>Offerte aanvragen</h2></b>" . " " . "U wilt een offerte aanvragen voor de" . " " . "<b>" .
            $row['merk'] . " " . $row['model'] . " " . "van" . " &euro;" . $row['vraagprijs'] . " " . "</b>" .
            "met het kenteken" . " " . "<b>" . $row['kenteken'] . "</b> " . "<p id='click'>Vul hier uw gegevens in:<br><input class='info' type='text' id='fname' name='fname' autocomplete='off' placeholder='voornaam'><br>" . " " .
            "<input class='info' type='text' id='lname' name='lname' autocomplete='off' placeholder='achternaam'><br>" . " " . "<input class='info' type='tel1' id='phone' name='phone' autocomplete='off' placeholder='telefoonnummer'><br>" . " " . "<input class='info' type='email' id='email' name='email' placeholder='e-mail'  autocomplete='off'>" .
            "<p id='inwissel'>Wilt u een auto inruilen? <label for='myCheck'>Ja: </label><input type='checkbox' id='myCheck' onclick='inruil()'></p>" . " " . "</br>" . "<button class='button button1' onclick='verzend()'>Verzenden</button>" . "</br></p></div>";

   
        echo $offerte;

    }
?>

<script>

function inruil() {

  document.getElementById('inwissel').innerHTML = '<label for="nauto">Vul hier de gegevens van uw auto in: </label><input class="telefoon" type="" placeholder="Merkauto" id="nauto" name="nauto"> <label for="tauto"></label><input class="telefoon" type="" placeholder="Modelauto" id="tauto" name="tauto"> <label for="kauto"></label><input class="telefoon" type="" placeholder="Kentekenauto" id="tauto" name="tauto">';
  
}

function verzend() {
  
  document.getElementById('inwissel').style.visibility = 'hidden';
  document.getElementById('click').innerHTML = 'Uw aanvraag is verzonden, wij nemen zo spoedig mogelijk contact met u op om de offerte met u te bespreken.';
  document.getElementById('click').style.color = '#33d222';
 
}

</script>

<div id="footerbalk">
  <p class="logo">V!ST@CARS © 2021</p>
</div></div>

<footer>
    <div class="footer">
        <div id="footercrtext">&copy; V!st@Cars(2021)</div>
        <div id="footerteltext">Telefoonnummer: 06 12345678</div>
        <a href="../login/index.php" id="loginbtn"><?php echo $portalbtn?></a>
        <a href="../login/includes/logout.php">Uitloggen</a>
    </div>
</footer>   
</div>
</body>
</html> 