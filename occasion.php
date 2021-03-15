<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="csstemplates/main.css" type="text/css">
    <link rel="stylesheet" href="csstemplates/occasion.css" type="text/css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;1,300&display=swap" rel="stylesheet">
    <title>V!st@Cars - Occasions</title>
</head>

<body>
 
 <div id="menu">
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="occasions.php">Showroom</a></li>
        <li><a href="info.php">Informatie</a></li>
        <li><a href="contact.php">Contact</a></li>
    </ul>
</div>
    
<div id="contentblok">
    <?php
        require_once ('./includes/connection.inc.php');
    
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

                $car .= "<div class='cell'><div class='photo'><img src='./dbimages/" . $rowimage['name_image'] . "' width='475px' /></div>";

            }

            $car .= "<div class='hoofdtitel'>" . $row['merk'] . " " . $row['model'] . " &euro; " . $row['vraagprijs'] . " " . "<div class= 'detailbutton'><a href='./includes/detailauto.inc.php?idauto=" . $row['id'] . "'><img src='./images/detail.png' width='45'></a></div></div></div>";
        
        }

            $car .= "</div>";
    
            echo $car;

    ?>
</div>

<div id="footerbalk">
<a href="login.php" class="login">Login</a>
  <p class="logo">V!ST@CARS © 2021</p>
</div>

</body>
</html>