<?php 
session_start();
    if(empty($_SESSION['username'])) {
        $portalbtn = "Inloggen";
        $_SESSION['errortype'] = "1";
        header("location:login/index.php");
    } else {
        switch($_SESSION['typeid']) {
            case 0:
                $_SESSION['errortype'] = "2";
                header("location:login/portal.php");
            break;
            case 1:
                $_SESSION['errortype'] = "2";
                header("location:login/portal.php");
            break;
            case 2:
                $portalbtn = "Portal";
            break;
        }
    }
?>
<!DOCTYPE HTML> <html>
<head>
<title>Toevoegen auto</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/adminpage.css">
<link rel="stylesheet" type="text/css" href="css/mainstyle.css">
</head> 
<div class="pagecon">
<nav>
    <section class="navContainer">
            <div class="logoWrapper"> <a href="../index.php"><img src="images/vistacars.V3.png" alt="V!ist@ Cars" style="width:12vh;height:11vh;"></a> </div>
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
 
        <div class="uploadblock"> 
        
                <div class="ImageUpload">
                            <?php 
                                // Uploader photos for map database
                                include('showroom/includes/connection.inc.php');   

                                if(isset($_POST["submit"])) {
                                    $target_dir = "./dbimages/";
                                    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                                    $uploadOk = 1;
                                    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                                        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                                    if($check !== false) {
                                        echo "File is an image - " . $check["mime"] . ".";
                                        $uploadOk = 1;
                                    } else {
                                        echo "File is not an image in png or jpg format.";
                                        $uploadOk = 0;
                                    } 

                                    // checks for error if the value of $uploadOk is set to zero (due to a possible error)
                                    if ($uploadOk == 0) {
                                        echo "Sorry, your file was not uploaded.";
                                    // if everything is ok then it uploads the file, or gives a response if the upload does not succeed
                                    } else {
                                        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                                            $bestandsnaam = htmlspecialchars( basename( $_FILES["fileToUpload"]["name"]));
                                            echo "The file " . $bestandsnaam . " has been uploaded.";
                                        } else {
                                            echo "Sorry an error occured with uploading your file.";
                                        }
                                    } 

                                }
                            ?> 
                </div>    
    
                    <form action="upload.php" method="POST"> 
                        Vul hier de informatie in van de auto, hierna kun je de afbeeldingen uploaden. <br> <br> <br>
                            <input type="text" name="merk" placeholder="Automerk">  
                            <input type="text" name="model" placeholder="Naam model Auto"> 
                            <input type="number" name="vraagprijs" placeholder="vraagprijs">  
                            <br>
                            <input type="text" name="apk" placeholder="Apk (MM-JJJJ)"> 
                            <input type="number" name="kmstand" placeholder="aantal km (getal)">
                            <input type="text" name="bouwjaar" placeholder="bouwjaar (MM-JJJJ)">
                            <br>
                            <input type="number" name="versnellingen" placeholder="aantal versnellingen (getal)">
                            <input type="text" name="transmissie" placeholder="transmissie">
                            <input type="text" name="kenteken" placeholder="kenteken auto">
                            <br>
                            <input type="text" name="kleur" placeholder="kleur van auto">
                            <input type="number" name="deuren" placeholder="aantal deuren (incl. achterklep)">
                            <input type="text" name="gewicht" placeholder="gewichtgetal in kg">
                            <br>
                            <input type="text" name="brandstof" placeholder="type brandstof">
                            <input type="text" name="airco" placeholder="airco?">
                            <input type="text" name="abs_optie" placeholder="abs optie?">
                            <br>
                            <input type="text" name="airbag" placeholder="airbag?">
                            <input type="text" name="stuurbekrachtiging" placeholder="stuurbekrachtiging?">
                            <input type="text" name="status" placeholder="status auto">
                            <br><br>
                            <button type="submit" name="submit"> Opslaan </button>  
                    </form>   
        </div>
        </div>
        <footer>
          <div class="footer">
            <div id="footercrtext">&copy; V!st@Cars(2021)</div>
            <div id="footerteltext">Telefoonnummer: 06 12345678</div>
            <a href="login/index.php" id="loginbtn"><?php echo $portalbtn?></a>
            <a href="login/includes/logout.inc.php" id="loginbtn">Uitloggen</a>
          </div>
      </footer>
</body> 
</html>  