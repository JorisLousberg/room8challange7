<?php
function connectDB() {
    $dbhost = "localhost";
    $dbusername = "Ced02";
    $dbpass = "V!st@_C@ll3ng3?";
    $dbname = "db_vistashowroom";

    try {
        $connect = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbusername, $dbpass);
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $error) {
        $message = $error->getMessage();
    }
}
connectDB();
?>
