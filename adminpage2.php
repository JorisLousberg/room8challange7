
<!DOCTYPE HTML> <html>
<head>
<title>Afbeeldingen uploaden</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/adminpage2.css">
</head> 

<body>
    <header>
        <div class="header_menu">
                <div class="menu_list">
                        <ul>	
                            <li><a href="../room8challange7/showroom/index.php">SHOWROOM</a></li>
                        </ul>	
                </div>
         </div>  
    </header>

    <div class="uploadblock">  
        
                 <div class="ImageUpload">        
                                    <?php 
                                        // Uploader photos for map database
                                        include('showroom/includes/connection.inc.php'); 

                                        if(isset($_POST["submit"])) {
                                            $target_dir = "./dbimages/";
                                            //print_r($_FILES);
                                            //die; 
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

                            <br><img style="border: 1px solid #000; background-color:rgba(27, 27, 27, 0.895);" src="<?php echo $target_dir . $bestandsnaam ?>" width="480px;" height="270">
                                <form action="adminpage2.php" method="post" enctype="multipart/form-data">

                                    Selecteer afbeelding [PNG en JPG]:<br><br>
                                    <input type="file" name="fileToUpload" id="fileToUpload" /><br />
                                    <input type="submit" value="Upload Foto" name="submit" />
                                </form><p>
                                    <br>
                                        Upload de foto eerst en vul deze hierna pas hier in. <br>
                                        Meerdere fotos per auto gebruiken hetzelfde auto_id. <br>
                 </div> 

                            <div class="rowcounter">
                                    <?php 
                                    // Functie voor opzoeken laatste rij in tabel
                                    //$rijnummer = $pdo->query('select count(*) tb_cars')->fetchColumn();; 
                                    $nRows = $pdo->query('select count(*) from tb_cars')->fetchColumn(); 
                                    ?> 

                                    <!--- <h3> Rij nummer: <?php //echo $rijnummer; ?></h3> --->
                                    <h3> Rij nummer: <?php echo $nRows; ?></h3>  
                            </div>
    
                            <form action="upload2.php" method="POST">
                                    <input type="number" name="auto_id" placeholder="autofoto id">  
                                    <br>
                                    <input type="text" name="name_image" placeholder="afbeeldingsnaam.png"> 
                                    <br><br>
                                    <button type="submit" name="submit"> Opslaan </button>  
                            </form> 

    </div>
 </body>     
</html>