<?php 
    session_start();
    $user = $_SESSION['user'];
    if(!isset($_SESSION['user'])) header('location: login.php')
?>


<!DOCTYPE HTML>
<html>
<head>
    <title>Tableau de bord - Système de gestion d'inventaire</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <script src="https://kit.fontawesome.com/88c79b1800.js" crossorigin="anonymous"></script>
</head>
<body>
    <div id="dashboardMainContainer">
        <div class="dashboard_sidebar" id="dashboard_sidebar">
            <h3 class="dashboard_logo" id="dashboard_logo">SGI</h3>
            <div class="dashboard_sidebar_user">
                <img src="images/sdff.jpg" alt="User_image." id="userImage">
                <span><?= $user['nom'] . ' ' . $user['prénom']?></span>
            </div>
            <div class="dashboard_sidebar_menus">
                <ul class="dashboard_menu_lists">
                    <li class="menuActive">
                        <a href="javascript:void(0);" class="menuActive"><i class="fa fa-gauge"></i>Tableau de bord</a>
                    </li>
                    <li>
                        <a href=""><i class="fa fa-products"></i>Produits</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="dashboard_content_container" id="dashboard_content_container">
            <div class="dashboard_topNav">
                <a href="database/logout.php" id="decoBtn">Se déconnecter</a>
            </div>
            <div class="dashboard_content">
                <div class="dashboard_content_main">
    
                </div>
            </div>
        </div>
    </div>

</body>
</html>