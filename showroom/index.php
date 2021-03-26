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
    <link rel="stylesheet" href="../css/showroom.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <script src="detail.js"></script>
    <title>V!st@Cars - Showroom</title>
</head>
<body>
<div class="pageconshowroom">
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
                $detail = "<a class='detailbutton' href='detailpage.php?idauto=" . $row['id'] . "'><img class='detail-btn' src='../images/detail_icon.svg'></a>";
                $modelnaam = "<div class='modelnaam'><span>" . $row['merk'] . " " . $row['model'] . "</span>" . "</div>" . $detail;
                $vraagprijs = "<div class='vraagprijs'>" . "&euro; " . $row['vraagprijs'] . "</div>";
                $hoofdtitel = "<div class='hoofdtitel'>" . $modelnaam . $vraagprijs . "</div></div>";
                
                
                // if(empty($rowimage['name_image'])) {
                //     $image = "image_unavailable.png";
                // } else {
                //     $image = $rowimage['name_image'];
                // }

                $car .= "<div class='cell'><div class='photo'><img src='./dbimages/" . $rowimage['name_image'] . "' width='475px' />" . $hoofdtitel . "</div>";

            }
        
        }

            $car .= "</div>";
    
            echo $car;

    ?>

</div>
    </div>
        <footer>
          <div class="footer">
            <div id="footercrtext">&copy; V!st@Cars(2021)</div>
            <div id="footerteltext">Telefoonnummer: 06 12345678</div>
            <a href="../login/index.php" id="loginbtn"><?php echo $portalbtn?></a>
            <div id="footercrtext"><b>Icons from thenounproject.com</b></div>
          </div>
      </footer>        
    </div>
</body>
</html>
