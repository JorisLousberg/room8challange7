<!DOCTYPE html><?php
    $images = array("LexusGS350", "LexusUX250hFSport", "toyota-prius-21091874_12972403_284","Toyotachr");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/mainstyle.css">
    <link rel="stylesheet" href="css/style.css">
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
            <section>
                    <!-- Slideshow container -->
                    <div class="slideshow-container">
                        <?php
                            for ($i = 0; $i < count($images); $i++) {
                        ?>
                        <!-- Full-width images with number and caption text -->
                        <div class="mySlides fade">
                            <div class="numbertext"><?php echo $i+1 ?> / <?php echo count($images) ?></div>
                            <img src="images/<?php echo $images[$i] ?>.jpg" style="width:100%">
                            <div class="text">Caption Text</div>
                        </div>
                        <?php
                            }
                        ?>
                        <!-- Next and previous buttons -->
                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>
                        </div>
                        <br>

                        <!-- The dots/circles -->
                        <div style="text-align:center">
                        <?php
                            for ($i = 0; $i < count($images); $i++) {
                        ?>
                        <span class="dot" onclick="currentSlide(<?php echo $i+1 ?>)"></span>
                        <?php
                            }
                        ?>
                    </div>
                    <!--
                    <p>
                    <input type="submit" value="stop" onclick="stopslideshow();" />
                    <input type="submit" value="start" onclick="startslideshow();" />
                    <input type="submit" value="is running" onclick="valrunslideshow();" />
                    -->
                </section>

            <section id="infobox1">
                <section class="infobox1text">test test hoi hoi dit is infobox 1</section>
            </section>

            <section id="infobox2">
                <section class="infobox2text">test test hoi hoi dit is infobox 2</section>
            </section>

          <section id="infobox3">
            <section class="infobox3text">test test hoi hoi dit is infobox 3</section>
          </section>
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
<script src="js/app.js"></script>