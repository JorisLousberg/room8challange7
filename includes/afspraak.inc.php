<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/mainstyle.css">
    <link rel="stylesheet" href="../css/afspraak.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>V!st@Cars - Home</title>
</head>
<body>
<div class="pagecon">
        <nav>
            <section class="navContainer">
                <div class="logoWrapper"> <a href="index.php"><img src="../images/vistacars.V3.png" alt="V!ist@ Cars" style="width:12vh;height:11vh;"></a> </div>
                <nav class="navMenu">
                    <ul class="navList">
                        <li class="navItem"><a class="navLink" href="../index.php">Home</a></li>     
                    </ul>
                    <ul class="navList">
                        <li class="navItem"><a class="navLink" href="../showroom/index.php">Showroom</a></li>     
                    </ul>
                    <ul class="navList">
                        <li class="navItem"><a class="navLink" href="../contact.php">Contact</a></li>     
                    </ul>
                </nav>
            </section>
        </nav>

    <div class="mainbody">

<?php
    require_once ('../showroom/includes/connection.inc.php');
    
            $sql = "SELECT kenteken, merk, model, customer_id FROM tb_customercar WHERE kenteken='" . $_GET['kenteken'] . "'";

            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            $resultcar = $stmt->fetchAll();

            $appcar = "<div id='afspraakauto'>";
            $appcar .= "<div class='box'>";

        foreach($resultcar as $key => $row) {   

            $sql = "SELECT * FROM tb_customer WHERE id=" . $row['customer_id'];

            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            $resultcustomer = $stmt->fetchAll();

            $appcust= "<div id='afspraakklant'>";

            foreach($resultcustomer as $key2 => $row2) {   

                $appcust .= $row2['first_name'] . " " . $row2['last_name'] . " " . $row2['street'] . " " . $row2['house_number'] . " " . $row2['city'];
            
            }

            $appcust .= "</div>";

            $appcar .= $row['merk'] . " " . $row['model'] . " " . $row['kenteken'];
            
        }
            $appcar .="</div></div>";   

        echo $appcar;
        echo $appcust;

?>
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