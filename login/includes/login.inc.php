<?php
// function login() {
    session_start();
    $dbhost = "localhost";
    $dbusername = "GR8";
    $dbpass = "V!st@_GR8?";
    $dbname = "db_gr8_ch7";
    $message = "";

    try {
        $connect = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbusername, $dbpass);
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        if(isset($_SESSION['username'])) {
            header('location:redirect.php');
        } else if(isset($_POST['login'])) {
            if(empty($_POST['username']) || empty($_POST["password"])) {
                $message = 'Vul uw gegevens in';
            } else {
                $query = "SELECT * FROM tb_login WHERE username = :username AND password = :password";
                $statement = $connect->prepare($query);
                
                
                $username = $_POST['username']; 
                $password = $_POST['password']; // credentials filled in by user

                $passwordHash = md5($password);

                $statement->execute(
                    array(
                        "username" => $username,
                        "password" => $passwordHash
                    )   
                );
                $row = $statement->fetch(PDO::FETCH_ASSOC);
                    $role = $row['typeid'];

                $count= $statement->rowCount();
                if($count > 0) {
                    $_SESSION['username'] = $_POST['username'];
                    $_SESSION['typeid'] = $role;
                    header("location:redirect.php"); // change to 'database/admin.php' 
                } else {
                    $message = '<label class="error-msg">Onjuiste gebruikersnaam en/of wachtwoord!</label>';
                }
            }
        }

    } catch(PDOException $error) {
        $message = $error->getMessage();
    }
// }
// login();
?>