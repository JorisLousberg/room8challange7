<?php 
session_start();
    if(empty($_SESSION['username'])) {
        $portalbtn = "Inloggen";
    } else {
        $portalbtn = "Portal";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/mainstyle.css">
    <link rel="stylesheet" href="../css/detail.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <title>V!st@Cars - Showroom</title>
</head>
<body>
<div class="pagecondetail">
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

<?php 
    require_once('includes/detailauto.inc.php');
?>

<!-- <div id="fotobox">
        <img src="dbimages/<?php echo $foto?>">
        <img src="dbimages/<?php echo $foto?>">
        <img src="dbimages/<?php echo $foto?>">
        <img src="dbimages/<?php echo $foto?>">
</div> -->
<div id="detailcontent">
    <div class="info">
        <?php echo "<span><b>" . $fullcarname . "</b></span>"?>
        <?php echo "<span>" . $vraagprijs . "</span>"?>
    </div>
    <div class="specs">
        <h2>Kenmerken</h2>
            <table>
                <tr>    
                    <th>Merk</th>
                    <th>Model</th>
                    <th>Bouwjaar</th>
                    <th>Kleur</th>
                    <th>Deuren</th>
                </tr>
                <tr>
                    <td><?php echo $merk?></td>
                    <td><?php echo $model?></td>
                    <td><?php echo $bouwjaar?></td>
                    <td><?php echo $kleur?></td>
                    <td><?php echo $deur?></td>
                </tr>
            </table>
    </div>
    <div class="specs">
        <h2>Specificaties</h2>
        <table>
                <tr>    
                    <th>Versnellingen</th>
                    <th>Transmissie</th>
                    <th>Brandstof</th>
                    <th>Gewicht</th>
                    <th>Kilometer Stand</th>
                </tr>
                <tr>
                    <td><?php echo $versnel?></td>
                    <td><?php echo $transmissie?></td>
                    <td><?php echo $brandstof?></td>
                    <td><?php echo $gewicht?></td>
                    <td><?php echo $km?></td>
                </tr>
            </table>
    </div>
    <div class="specs">
        <h2>Extra Kenmerken/Specificaties</h2>
        <table>
                <tr>    
                    <th>Airco</th>
                    <th>ABS</th>
                    <th>APK</th>
                    <th>Stuurbekrachtiging</th>
                </tr>
                <tr>
                    <td><?php echo $airco?></td>
                    <td><?php echo $abs?></td>
                    <td><?php echo $apk?></td>
                    <td><?php echo $stuurbekracht?></td>
                </tr>
            </table>
    </div>
    <div class="link-cont">
        <?php echo "<a class='link' href='./offerteaanvraag.php?idauto=" . $_GET['idauto'] . "'><i class='fas fa-file-signature'></i> Offerte Aanvragen</a>"?>
        <?php echo "<a class='link' href='../includes/proefrit.inc.php?idauto=" . $_GET['idauto'] . "'><i class='fas fa-car'></i> Proefrit Aanvragen</a>"?>
    </div>
</div>

    <footer>
          <div class="footer">
            <div id="footercrtext">&copy; V!st@Cars(2021)</div>
            <div id="footerteltext">Telefoonnummer: 06 12345678</div>
            <a href="../login/index.php" id="loginbtn"><?php echo $portalbtn?></a>
          </div>
      </footer>        
    </div>
</div>
</body>
</html>