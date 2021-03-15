<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/mainstyle.css">
    <link rel="stylesheet" href="../css/showroom.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>V!st@Cars - Showroom</title>
</head>
<body>
    <div class="pagecon">
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
            <li class="navItem"><a class="navLink" href="contact.php">Contact</a></li>     
        </ul>
    </nav>
</section>
        </nav>


<div id="contentblok">
    <?php
        require_once('includes/connection.inc.php');
    
            $sql = "SELECT * FROM tb_cars";

            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll();

            //print_r($result);

        $car = "<div id='table'>";

        foreach($result as $key => $row) {

            $sql = "SELECT name_image FROM tb_image WHERE auto_id =" . $row['id'] . " LIMIT 1";

            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            $resultimage = $stmt->fetchAll();

            foreach($resultimage as $keyimage => $rowimage) {
                $modelnaam = "<div class='modelnaam'><span>" . $row['merk'] . " " . $row['model'] . "</span></div>";
                $vraagprijs = "<div class='vraagprijs'>" . "&euro; " . $row['vraagprijs'] . "</div>";
                $hoofdtitel = "<div class='hoofdtitel'>" . $modelnaam . $vraagprijs . "<div class= 'detailbutton'><a href='./includes/detailauto.inc.php?idauto=" . $row['id'] . "'><img src='./images/detail.png' width='45'></a></div></div></div>";
                
                
                $car .= "<div class='cell'><div class='photo'><img src='./dbimages/" . $rowimage['name_image'] . "' width='475px' />" . $hoofdtitel . "</div>";

            }
        
        }

            $car .= "</div>";
    
            echo $car;

    ?>
</div>

        <footer>
          <div class="footer">
            <div id="footercrtext">&copy; V!st@Cars(2021)</div>
            <div id="footerteltext">Telefoonnummer: 06 12345678</div>
            <a href="login/login.php" id="loginbtn">Inloggen</a>
          </div>
      </footer>        
    </div>
    
</body>
</html>
