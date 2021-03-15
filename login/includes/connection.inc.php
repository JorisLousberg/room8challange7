<?php
function connectDB() {
    $dbhost = "localhost:3306";
    $dbusername = "Ced02";
    $dbpass = "_9D5sf3i";
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
