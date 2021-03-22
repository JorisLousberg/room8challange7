<!DOCTYPE html><?php
    $images = array("LexusGS350", "LexusUX250hFSport", "toyota-prius-21091874_12972403_284","Toyotachr");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/mainstyle.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>V!st@Cars - Home</title>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
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
            <div class="wrapper">
                <div class="carousel owl-carousel">
                    <div class="card card-1">
                        <img src="showroom/dbimages/auto5.png">
                        <div>Toyota RAV4ㅤ €80.500</div>
                    </div>
                    <div class="card card-2">
                        <img src="showroom/dbimages/auto3.png">
                        <div>BMW X3 ㅤ €60.416</div>
                    </div>
                    <div class="card card-3">
                        <img src="showroom/dbimages/auto2.jpg">
                        <div>BMW 114i ㅤ €12.251</div>
                    </div>
                    <div class="card card-4">
                        <img src="showroom/dbimages/auto1.jpg">
                        <div>Hyundai Atos 1.1iㅤ €2.950</div>
                    </div>
                    <div class="card card-5">
                        <img src="showroom/dbimages/auto7.png">
                        <div>Volkswagen Golf 8 ㅤ €100.000</div>
                    </div>
                </div>
            </div>
            <script>
            $(".carousel").owlCarousel({
                margin: 20,
                loop: true,
                autoplay: true,
                autoplayTimeout: 4000,
                autoplayHoverPause: true,
                responsive: {
                0:{
                    items:1,
                    nav: false
                },
                600:{
                    items:2,
                    nav: false
                },
                1000:{
                    items:3,
                    nav: false
                }
                }
            });
            </script>
        </section>

            <section id="infobox1">
                <section class="infobox1text">Vanaf nu kunt u ook onze werkplaats bezoeken en reperaties laten uitvoeren.</section>
            </section>

            <section id="infobox2">
                <section class="infobox2text">Wilt u contact met ons opnemen? Ga dan naar de <a href="contact.php">contact pagina</a>.</section>
            </section>

          <section id="infobox3">
            <section class="infobox3text">Wij bieden goede service aan.</section>
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