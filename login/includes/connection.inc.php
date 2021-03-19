<?php
function connectDB() {
    $dbhost = "localhost";
    $dbusername = "Melissa";
    $dbpass = "Melissa01";
    $dbname = "room8challenge7";

    try {
        $connect = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbusername, $dbpass);
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $error) {
        $message = $error->getMessage();
    }
}
connectDB();
?>
