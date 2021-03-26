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

        $auto_id = $_POST['auto_id'];
        $name_image = $_POST['name_image'];  

       $sql = "INSERT INTO `tb_image` (`id`, `auto_id`, `name_image`) 
       VALUES ('NULL', '$auto_id', '$name_image');";   
       mysqli_query($conn, $sql);

        header("Location: adminpage2.php?opslaan=success");

    } //end function getDbConnection  

    $pdo =getDbConnection(); //stop return waarde in nieuwe variabele 
    
    
    
   