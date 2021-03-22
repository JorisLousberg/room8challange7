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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/mainstyle.css">
    <link rel="stylesheet" href="../css/afspraak.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>V!st@Cars - Home</title>
</head>

<body>
<div class="pagecon">
        <nav>
            <section class="navContainer">
                <div class="logoWrapper"> <a href="index.php"><img src="../images/vistacars.V3.png" alt="V!ist@ Cars" style="width:12vh;height:11vh;"></a> </div>
                <nav class="navMenu">
                    <ul class="navList">
                        <li class="navItem"><a class="navLink" href="../index.php">Home</a></li>     
                    </ul>
                    <ul class="navList">
                        <li class="navItem"><a class="navLink" href="../showroom/index.php">Showroom</a></li>     
                    </ul>
                    <ul class="navList">
                        <li class="navItem"><a class="navLink" href="../contact.php">Contact</a></li>     
                    </ul>
                </nav>
            </section>
        </nav>

    <div class="mainbody">

<?php
    require_once ('../showroom/includes/connection.inc.php');

    if (isset($_POST['submit'])) {

        $comm = preg_replace( "/\r\n/", "<BR>", $_POST['comm'] );
        $sql = "UPDATE tb_customercar SET history = CONCAT(history, '<BR>" . $_POST['date'] . " " . $comm . "') WHERE kenteken = '" . $_POST['key'] . "'";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();

        $sql = "INSERT INTO tb_appointment (kenteken, datum, time_from, time_to, lokatie, soort, leenauto) VALUES ('" . $_POST['key'] . "','" . $_POST['date'] . "','" . $_POST['time_from'] . "','" . $_POST['time_to'] . "','" . $_POST['location'] . "','" . $_POST['afspr'] . "','" . $_POST['lcar'] . "')";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        
        echo "Afspraak gemaakt voor " . $_POST['date'] . " van " . $_POST['time_from'] . " tot " . $_POST['time_to'];
        sleep(2);
        header("Location: afspraak.inc.php?kenteken=" . $_POST['key']);

} elseif (isset($_GET['kenteken'])) {
    
            $sql = "SELECT kenteken, merk, model, customer_id, history FROM tb_customercar WHERE kenteken='" . $_GET['kenteken'] . "'";

            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            $resultcar = $stmt->fetchAll();

            $appcar = "<div id='afspraakauto'>";
            $appcar .= "<div class='box'>";

        foreach($resultcar as $key => $row) {   

            $sql = "SELECT * FROM tb_customer WHERE id=" . $row['customer_id'];

            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            $resultcustomer = $stmt->fetchAll();

            $appcust= "<div id='afspraakklant'>";
            $appcust .= "<div class='box'>";

            foreach($resultcustomer as $key2 => $row2) {   

                $appcust .= "<div class='firstn'>Voornaam: </div><div class='fn'>" . $row2['first_name'] . "</div><div class='lastn'>Achternaam: </div><div class='ln'>" . $row2['last_name'] . "</div><div class='pcode'>Postcode: </div><div class='ac'>" . $row2['postcode'] . "</div><div class='str'>Straat: </div><div class='st'>" . $row2['street'] . "</div><div class='nmb'>Huisnummer: </div><div class='hn'>" . $row2['house_number'] . "</div><div class='cty'>Plaats: </div><div class='city'>" . $row2['city'] . "</div><div class='phonenmb'>Telefoonnummer: </div><div class='phone'>" . $row2['phone_number'] . "</div><div class='mail'>E-mail: </div><div class='emadress'>" . $row2['e_mail'] . "</div>";
                $appcust .= "<div class='opmerkingen'><form method='post' enctype='multipart/form-data' name='afspraak' action='afspraak.inc.php?kenteken=" . $row['kenteken'] . "'><label for='comm'>Opmerkingen: </label><textarea id='comm' name='comm' rows='3' cols='50'></textarea><br /><label for='lcar'>Leen auto: </label><select id='lcar' name='lcar'><option value='nee'>nee</option><option value='ja'>ja</option></select><br /><label for='element'>Soort afspraak: </label><select id='element' name='afspr'><option value='apk'>APK</option><option value='grote beurt'>Grote beurt</option><option value='kleine beurt'>Kleine beurt</option><option value='showroom'>Showroom</option><option value='overig'>Overig</option></select><label for='lokatie'><div class= 'pl'>Lokatie:</label><select id='lokatie' name='location'><option value='Maastricht'>Maastricht</option><option value='Sittard'>Sittard</option><option value='Heerlen'>Heerlen</option></select></div><br /><div class='datum'><label for='dat'>Datum: </label><input type='date' name='date' id='dat' required></div><div class='tijd'>Tijd van: <input type='time' name='time_from' id='tm' required> tot <input type='time' name='time_to' id='tm1' required></div><br><br><input type='submit' name='submit' class='verz' value='Verzenden'><input type='hidden' name='key' value='" . $row['kenteken'] . "'></form></div>";

            }

            $appcust .= "</div></div>";

            $appcar .= "<div class='licence'>Kenteken: </div><div class='kt'>" . $row['kenteken'] . "</div><div class='brand'>Merk: </div><div class='mk'>" . $row['merk'] . "</div><div class='model'>Model: </div><div class='md'>" . $row['model'] . "</div><div class='work'>Werkplaats geschiedenis: </div><br /><div class='history'>" . $row['history'] . "</div>";
            
        }
        
        $appcar .="</div></div>";   
 
        echo $appcar;
        echo $appcust;
    }
?>
    </div>

    <footer>
          <div class="footer">
            <div id="footercrtext">&copy; V!st@Cars(2021)</div>
            <div id="footerteltext">Telefoonnummer: 06 12345678</div>
            <a href="../login/index.php" id="loginbtn"><?php echo $portalbtn?></a>
          </div>
    </footer>        
</div>
    
</body>
</html>