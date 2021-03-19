<?php
function connectDB() {
    $dbhost = "localhost";
    $dbusername = "GR8";
    $dbpass = "V!st@_GR8?";
    $dbname = "db_gr8_ch7";

    try {
        $connect = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbusername, $dbpass);
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $error) {
        $message = $error->getMessage();
    }
}
connectDB();
?>
