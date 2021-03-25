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
    <link rel="stylesheet" href="css/contact.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>V!st@Cars - Home</title>
</head>
<body>
<div class="pageconcontact">
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

        <div id="coronacontainer">
            <div class="corona"><p class="titel">Corona<div class="tekst">
                <li>In verband met Corona kunt u onze showroom en werkplaats alleen op telefonische afspraak bezoeken.</li>
                <li>Bij uw bezoek dient u uiteraard een mondkapje te dragen.</li>
                <li>Wij voorzien u bij de ingang van handgel en tissues.</li>
                <li>Indien u een proefrit wil, kan deze vanaf een van onze locaties starten of vanaf u thuis. Wij brengen de auto
                dan naar u toe, en reinigen die voor- en achteraf.</li></div></p></div>
        </div>

        <div id="infocontainer">
            <div class="corona"><p class="titel">Contact gegevens<div class="locatie">Locaties<br /> Maastricht: Heerderdwarsstraat 36<br />Sittard: Bergerweg 73<br /> Heerlen: Sint Barbarastraat 10<br /><br /></div><div class="email">Email: info@vistacars.nl<br />Telefoonnummer: 06 12345678</div>
            <br /><div class="opening"> Openingstijden<br />Maandag 08:00 tot 17:00 uur<br />Dinsdag 08:00 tot 17:00 uur<br />Woensdag 08:00 tot 17:00 uur<br />Donderdag: 08:00 tot 17:00 uur<br />Vrijdag: 08:00 tot 17:00 uur<br /> Zaterdag 10:00 tot 14:00 uur </div></div></p></div>
        </div>


        <div id="locatiecontainer">
            <div id="locatiecontainer1">
                <div class="locatieinfo"><p class="titellocatie">‎‎ Maastricht <br><div class="tekst">
                    <div style="width: 100%"><iframe width="360" height="360" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2519.330567613278!2d5.711638415745692!3d50.84356257953165!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c0e98fd73aa0b5%3A0x191e5dfc65544371!2sHeerderdwarsstraat%2036%2C%206224%20LT%20Maastricht!5e0!3m2!1snl!2snl!4v1616147350422!5m2!1snl!2snl"></iframe></div>
                        <br>
                            <li>Maastricht: Heerderdwarsstraat 36 </li>
                            <li>Email: info@vistacars.nl          </li>
                            <li>Telefoonnummer: 06 12345678       </li>
                </div></p></div>
            </div>

            <div id="locatiecontainer2">
                <div class="locatieinfo"><p class="titellocatie">‎‎ Sittard<br><div class="tekst">
                    <div style="width: 100%"><iframe width="360" height="360" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2511.1075948874345!2d5.838801915501314!3d50.995683855809126!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c0c79e98b8f159%3A0xac187411e918df3e!2sBergerweg%2073%2C%206135%20KD%20Sittard!5e0!3m2!1snl!2snl!4v1616147648411!5m2!1snl!2snl"></iframe></div>
                        <br>
                            <li>Sittard: Bergerweg 73       </li>
                            <li>Email: info@vistacars.nl    </li> 
                            <li>Telefoonnummer: 06 12345678 </li> 
                </div></p></div>
            </div> 

            <div id="locatiecontainer3">
                <div class="locatieinfo"><p class="titellocatie">‎‎ Heerlen <br><div class="tekst">
                    <div style="width: 100%"><iframe width="360" height="360" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2516.0862183778527!2d5.990387715497966!3d50.903620762489076!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c0bc54505e26d9%3A0x733d2bedf2de5fd0!2sSint%20Barbarastraat%2010%2C%206415%20RV%20Heerlen!5e0!3m2!1snl!2snl!4v1616147774706!5m2!1snl!2snl"></iframe></div>
                        <br> 
                            <li>Heerlen: Sint Barbarastraat 10 </li>
                            <li>Email: info@vistacars.nl       </li>
                            <li>Telefoonnummer: 06 12345678    </li>
                </div></p></div>
            </div>
        </div>
  
            <div id="contactcontainer">
                    <div class="contactinfo"><p class="titelcontact"> Contact Opnemen <div class="tekst">
                        <form action="" enctype="multipart/form-data" method="post">

                                    <br /><br /><label for="phone">E-mail*:</label>
                                    <input type="email" name="mail" placeholder="example@gmail.com" required> 

                                    <br /><br /><label for="phone">Telefoonnummer*:</label>
                                    <input type="tel" name="phone" placeholder="06 12345678">


                                    <br /><br /><label for="">Onderwerp*:</label>
                                        <select>
                                            <option value="">Kies onderwerp</option>
                                            <option value="klacht">Klacht</option>
                                            <option value="feedback">Feedback</option>
                                            <option value="vraag">Vraag</option>
                                            <option value="proefrit">Proefrit</option>
                                            <option value="afspaak maken">Afspraak Maken</option>
                                            <option value="andere">Andere</option>
                                        </select>

                            <br /><br /><label for="phone">Naam*:</label>
                            <input type="text" name="name" placeholder="Voornaam & Achternaam*" required>

                            <br /><br /><label for="">Provincie:</label>
                                <select name="provincie" id="provincie">
                                    <option value="Drenthe">Drenthe</option>
                                    <option value="Flevoland">Flevoland</option>
                                    <option value="Friesland">Friesland</option>
                                    <option value="Gelderland">Gelderland</option>
                                    <option value="Groningen">Groningen</option>
                                    <option value="nl_limburg" selected>Limburg</option>
                                    <option value="Noord-Brabant">Noord-Brabant</option>
                                    <option value="Noord-Holland">Noord-Holland</option>
                                    <option value="Overijssel">Overijssel</option>
                                    <option value="Utrecht">Utrecht</option>
                                    <option value="Zeeland">Zeeland</option>
                                    <option value="Zuid-Holland">Zuid-Holland</option>
                                </select>
 
                        <br /><br /><label for="phone">Adres:</label>
                            <input type="text" name="postcode" placeholder="Postcode" required>
                            <input type="text" name="huisnummer" placeholder="Huisnummer" required>
                
                        <br /><br /><label for="phone">Bericht:</label>
                        <br /><textarea type="text" name="w3review" rows="8" cols="58" placeholder="Bericht(max 400 tekens)" maxlength="400"></textarea> <br/>

                        <br /><input type="button" value="Verzenden" onclick="msg()">
                </div></div></p></div>

            <div id="reclamecontainer">
                <div class="corona"><p class="photo"><img src="./images/reclame.jpg"></p></div>
            </div>

            <div id="autowaarde">
                        <div class="waarde">Wilt u een schatting van de dagwaarde van uw auto opvragen? <a href=https://www.viabovag.nl/inruilwaarde-auto-berekenen>Klik hier voor uw BOVAG waarde</a></div>
            </div>
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