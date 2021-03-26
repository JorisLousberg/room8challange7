<?php 
session_start();
    if(empty($_SESSION['username'])) {
        $portalbtn = "Inloggen";
        $_SESSION['errortype'] = "1";
        header("location:../../login/index.php");
    } else {
        switch($_SESSION['typeid']) {
            case 0:
                $_SESSION['errortype'] = "2";
                header("location:login/portal.php");
            break;
            case 1:
                $portalbtn = "Portal";
            break;
            case 2:
                $portalbtn = "Portal";
            break;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/registerclient.css">
    <link rel="stylesheet" href="../../css/mainstyle.css">
    <title>REGISTRATIE</title>
</head>
<body>
<div class="pagecon">
    <nav>
        <section class="navContainer">
            <div class="logoWrapper"> <a href="../../index.php"><img src="../../images/vistacars.V3.png" alt="V!ist@ Cars" style="width:12vh;height:11vh;"></a> </div>
            <nav class="navMenu">
                <ul class="navList">
                    <li class="navItem"><a class="navLink" href="../../index.php">Home</a></li>     
                </ul>
                <ul class="navList">
                    <li class="navItem"><a class="navLink" href="../../showroom/index.php">Showroom</a></li>     
                </ul>
                <ul class="navList">
                    <li class="navItem"><a class="navLink" href="../../contact.php">Contact</a></li>     
                </ul>
            </nav>
        </section> 
    </nav>

    <div class="mainbody">
        <section class='formcon'>
            <?php 
                //gegevens in de database opslaan
                //1. we maken een formulier voor de input van de gegevens
                //2. we maken connectie met de database
                //3. we slaan de ingevoerde gegevens op in de database 
                if(isset($_POST['frmInsertMenuitem'])){
                    //opslaan van gegevens
                    print_r($_POST);
                    include_once('connection.inc.php'); //connectie met DB maken
                    include_once("collect.inc.php");    //Gegevens uit formulier halen
                    include_once("insert.inc.php");    //opslaan van gegevens in de DB ?> 

                        <!--na het opslaan komt een js functie-->
                        <script>setTimeout(function () {
                        window.open('registerclient.php', '_top');
                        }, 500); </script><?php //na een seconde wordt de user naar het menu gestuurd
                } else {
                    //als er geen post dan toont hij het formulier
                    include_once('form.inc.php');
                } 
            ?>  
        </section>

        <section class="datacon">
            <?php 
                include_once('connection.inc.php');
                include_once('select.inc.php'); 
            ?>
        </section>
    </div>

    <footer>
        <div class="footer">
            <div id="footercrtext">&copy; V!st@Cars(2021)</div>
            <div id="footerteltext">Telefoonnummer: 06 12345678</div>
            <a href="../../login/index.php" id="loginbtn"><?php echo $portalbtn?></a>
            <a href="../../login/includes/logout.inc.php" id="loginbtn">Uitloggen</a>
        </div>
    </footer>       
</div>
    
</body>
</html>