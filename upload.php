<?php
    function getDbConnection() {
        $dbhost = "localhost";
        $dbusername = "GR8";
        $dbpass = "V!st@_GR8?";
        $dbname = "db_gr8_ch7";

        $conn       = "";          // connection string
        $pdo        = "";          // handler
        $charset = 'utf8mb4'; 
        
        $conn = mysqli_connect($dbhost, $dbusername, $dbpass, $dbname); 
        
        $options = [ // define options for PDO connection
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // give error in case of issue
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,       // get row indexed by column name
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];

        $merk = $_POST['merk'];
        $model = $_POST['model'];
        $vraagprijs = $_POST['vraagprijs'];
        $apk = $_POST['apk'];
        $kmstand = $_POST['kmstand'];
        $bouwjaar = $_POST['bouwjaar'];
        $versnellingen = $_POST['versnellingen'];
        $transmissie = $_POST['transmissie'];
        $kenteken = $_POST['kenteken'];
        $kleur = $_POST['kleur']; 
        $deuren = $_POST['deuren']; 
        $gewicht = $_POST['gewicht'];
        $brandstof = $_POST['brandstof'];
        $airco = $_POST['airco']; 
        $abs_optie = $_POST['abs_optie'];
        $airbag = $_POST['airbag'];
        $stuurbekrachtiging = $_POST['stuurbekrachtiging'];
        $status = $_POST['status'];

        $sql = "INSERT INTO `tb_cars` ( `merk`, `model`, `vraagprijs`, `apk`, `kmstand`, `bouwjaar`, `versnellingen`, `transmissie`, `kenteken`, 
        `kleur`, `deuren`, `gewicht`, `brandstof`,  `airco`, `abs_optie`, `airbag`, `stuurbekrachtiging`, `status`)
        VALUES ('$merk', '$model', '$vraagprijs', '$apk', '$kmstand', '$bouwjaar', '$versnellingen', '$transmissie', '$kenteken', '$kleur', '$deuren', '$gewicht',
         '$brandstof', '$airco', '$abs_optie', '$airbag', '$stuurbekrachtiging', '$status');"; 
        mysqli_query($conn, $sql); 

        header("Location: adminpage2.php?opslaan=success");

    } //end function getDbConnection  

    $pdo =getDbConnection(); //stop return waarde in nieuwe variabele 