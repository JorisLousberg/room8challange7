<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/formstyle.css">
    <title>Document</title>
</head>
<body>
<?php 
//gegevens in de database opslaan
//1. we maken een formulier voor de input van de gegevens
//2. we maken connectie met de database
//3. we slaan de ingevoerde gegevens op in de database 


if(isset($_POST['frmInsertMenuitem'])){
    //opslaan van gegevens
    print_r($_POST);

    include_once('connection.inc.php'); //connectie met DB maken
    include_once("collect.inc.php");    //Gegevens uit formulier halen
    include_once("insert.inc.php");    //opslaan van gegevens in de DB ?> 

        <!--na het opslaan komt een js functie-->
        <script>setTimeout(function () {
        window.open('testresults.php', '_top');
        }, 1000); </script><?php //na een seconde wordt de user naar het menu gestuurd
} else {
    //als er geen post dan toont hij het formulier
    include_once('form.inc.php');
} ?>    
</body>
</html>