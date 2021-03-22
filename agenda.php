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
    <link rel="stylesheet" href="./css/mainstyle.css">
    <link rel="stylesheet" href="./css/agenda.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>V!st@Cars - Home</title>
</head>
<body>
<div class="pagecon">
        <nav>
            <section class="navContainer">
                <div class="logoWrapper"> <a href="index.php"><img src="./images/vistacars.V3.png" alt="V!ist@ Cars" style="width:12vh;height:11vh;"></a> </div>
                <nav class="navMenu">
                    <ul class="navList">
                        <li class="navItem"><a class="navLink" href="./index.php">Home</a></li>     
                    </ul>
                    <ul class="navList">
                        <li class="navItem"><a class="navLink" href="./showroom/index.php">Showroom</a></li>     
                    </ul>
                    <ul class="navList">
                        <li class="navItem"><a class="navLink" href="./contact.php">Contact</a></li>     
                    </ul>
                </nav>
            </section>
        </nav>

    <div class="mainbody">

<?php

    $planner="<form method='post' enctype='multipart/form-data' name='agenda' action='agenda.php'><br /><div class= 'loco'><label for='locate'>Lokatie: </label></div><div class= 'places'><select id='place' name='place'><option value='Maastricht'>Maastricht</option><option value='Heerlen'>Heerlen</option><option value='Sittard'>Sittard</option></select></div><br /><br><div class= 'send'><input type='submit' class='test' name='submit' class='verz' value='Verzenden'></div></form>";
    
        if (isset($_POST['submit'])) {

        echo $planner;
        echo "<div class='header'>Planning voor: " . $_POST['place'] . "</div>";

        require_once ('./showroom/includes/connection.inc.php');

        $curdate = date("Y-m-d");
        $sql = "SELECT datum, TIME_FORMAT(time_from,'%H:%i') time_from, TIME_FORMAT(time_to,'%H:%i') time_to, lokatie, soort, kenteken FROM tb_appointment WHERE lokatie = '" . $_POST['place'] . "' AND datum >='" . $curdate . "' ORDER BY datum ASC, time_from ASC";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();

        $planbox = "<div id='planboxed'>";
        $planbox .= "<div class= 'date'> Datum </div><div class= 'time'> Tijd </div><div class= 'appointment'> Afspraak </div><div class= 'lice'> Kenteken </div>";

        foreach($result as $key => $row) { 

            $planbox .= "<div class= 'datum'>" . $row['datum'] . "</div><div class= 'tijd'>" . $row['time_from'] . " tot " . $row['time_to'] . "</div><div class= 'afspraak'>" . $row['soort'] . "</div><div class='kenteken'>" . $row['kenteken'] . "</div><div class='detailbutton'><a href='./includes/afspraak.inc.php?kenteken=" . $row['kenteken'] . "'><img class='detail-btn' src='./images/detail_icon.svg'></a></div><br />";

        }

        $planbox .="</div>";
        echo $planbox;

    }
    
    else {

        echo $planner;

    }

?>
    </div>

    <footer>
          <div class="footer">
            <div id="footercrtext">&copy; V!st@Cars(2021)</div>
            <div id="footerteltext">Telefoonnummer: 06 12345678</div>
            <a href="login/index.php" id="loginbtn"><?php echo $portalbtn?></a>
          </div>
    </footer>        
</div>
    
</body>
</html>