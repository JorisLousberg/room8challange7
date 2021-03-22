<?php 
    $werkplaats =
    "<a class='link'>
        <div class='cont'>
            <div class='imag'>
                <img src='../images/wrench_icon.png'>
            </div>  
            <div class='tx'>
                <span>Werkplaats</span>
            </div>
        </div>
    </a>";

    $medewerker = 
    "<a class='link'>
        <div class='cont'>
            <div class='imag'>
                <img src='../images/agenda_icon.png'>
            </div>  
            <div class='tx'>
                <span>Medewerker</span>
            </div>
        </div>
    </a>"

    $admin = 
    "<a class='link'>
        <div class='cont'>
            <div class='imag'>
                <img src='../images/admin_icon.png'>
            </div>  
            <div class='tx'>
                <span>Admin</span>
            </div>
        </div>
    </a>"

    switch ($_SESSION['typeid']) {
        case 0:
            echo $werkplaats;
        break;
        case 1:
            echo $werkplaats . $medewerker;
        break;
        case 2:
            echo $werkplaats . $medewerker . $admin;
        break;
        default:
        echo "<span><b>Error:</b> Try logging in again.</span>";
    }
?>