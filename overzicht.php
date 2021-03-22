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
    <link rel="stylesheet" href="css/mainstyle.css">
    <link rel="stylesheet" href="css/afspraak.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>V!st@Cars - Home</title>
</head>
<body>
<div class="pagecon">
        <nav>
            <section class="navContainer">
                <div class="logoWrapper"> <a href="index.php"><img src="images/vistacars.V3.png" alt="V!ist@ Cars" style="width:12vh;height:11vh;"></a> </div>
                <nav class="navMenu">
                    <ul class="navList">
                        <li class="navItem"><a class="navLink" href="index.php">Home</a></li>     
                    </ul>
                    <ul class="navList">
                        <li class="navItem"><a class="navLink" href="./showroom/index.php">Showroom</a></li>     
                    </ul>
                    <ul class="navList">
                        <li class="navItem"><a class="navLink" href="contact.php">Contact</a></li>     
                    </ul>
                </nav>
            </section>
        </nav>

    <div class="mainbody">

<?php

    require_once ('./showroom/includes/connection.inc.php');
    
            $sql = "SELECT kenteken, merk, model FROM tb_customercar";

            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            $resultlist = $stmt->fetchAll();

            $list= "<div id='lijst'>";

            foreach($resultlist as $key => $row){

                $list .= "<div class='style'>" . $row['merk'] . "  " . $row['model'] . "</div><div class='plate'>" . $row['kenteken'] . "</div><div class='planner'><a href='includes\afspraak.inc.php?kenteken=" . $row['kenteken'] . "'><img src='images\appointment.png' width='25px'></a></div>";

            }

                $list .="</div>";

                echo $list;
         
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