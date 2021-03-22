<?php 
    if(isset($_SESSION['username'])) {
        die;
    } else {
        header("index.php");
    }
?>

<h1>Portal</h1>
<a href="includes/logout.inc.php">Logout</a>