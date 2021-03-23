<?php 
session_start();
    if(isset($_SESSION['username'])) {
        $portalbtn = "<a href='includes/logout.inc.php' id='loginbtn'>Uitloggen</a>";
    } else {
        header("location:index.php");
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/mainstyle.css">
    <link rel="stylesheet" href="../css/portal.css">
    <title>Document</title>
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
                <li class="navItem"><a class="navLink" href="../contact.php">Contact</a></li>     
            </ul>
        </nav>
    </section>
</nav>
<h1>Portal</h1>

<section id="links">
    <?php 
        $werkplaats =
        "<a href='../agenda.php' class='link'>
            <div class='cont'>
                <div class='imag'>
                    <img src='../images/wrench_icon.png'>
                </div>  
                <div class='tx'>
                    <span>Werkplaats</span>
                </div>
            </div>
        </a>";

        $medewerker =
        "<a href='../overzicht.php' class='link'>
            <div class='cont'>
                <div class='imag'>
                    <img src='../images/employee_icon.png'>
                </div>  
                <div class='tx'>
                    <span>Medewerker</span>
                </div>
            </div>
        </a>";

        $admin = 
        "<a href='../adminpage.php' class='link'>
            <div class='cont'>
                <div class='imag'>
                    <img src='../images/admin_icon.png'>
                </div>  
                <div class='tx'>
                    <span>Admin</span>
                </div>
            </div>
        </a>";

        switch ($_SESSION['typeid']) {
            case 0:
                echo $werkplaats;
            break;
            case 1:
                echo $werkplaats . $medewerker;
            break;
            case 2:
                echo $werkplaats . $medewerker . $admin;
            break;
            default:
            session_destroy();
            echo "<span><b>Error:</b> Try logging in again.</span>";
        }
    ?>
</section>   
</div>
<footer>
    <div class="footer">
        <div id="footercrtext">&copy; V!st@Cars(2021)</div>
        <div id="footerteltext">Telefoonnummer: 06 12345678</div>
        <?php echo $portalbtn?>
        <div id="footercrtext"><b>Icons from thenounproject.com</b></div>
    </div>
</footer>
</body>
</html>
