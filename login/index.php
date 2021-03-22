<?php 
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
    <link rel="stylesheet" href="../css/login.css">
    <title>Document</title>
</head>
<body>
    <?php
        require_once("includes/login.inc.php");
    ?>
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

<form method="post">
    <div class="login-box">
        <img src="../images/vistacars.V3.png">
            <?php 
            if(isset($message)) {
                echo '<label class="error-txt">'.$message.'</label>';
            }
        ?>
        <input class="textbox" autocomplete="off" type="text" placeholder="Gebruikersnaam" name="username" value="" />
        <input class="textbox" type="password" placeholder="Wachtwoord" name="password" value="" />
        <input class="button" type="submit" name="login" value="Inloggen" />
    </div>
</form>

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

