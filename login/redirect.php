<?php
    session_start();
    if(isset($_SESSION['username'])) {
        echo "<h1>Please wait while you are being directed</h1>";
        switch($_SESSION['typeid']) {
            case 0:
                header("location:portal.php");
            break;
            case 1:
                header("location:portal.php");
            break;
            case 2:
                header("location:portal.php");
            break;
        default:
            session_destroy();
            echo "<h3 style='color:red;'>Error: Unknown User</h3><br>";
            echo "<a href='index.php'>Go back to login page</a>";
        }
    } else {
        session_destroy();
        header("location:index.php");
    }
?>