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
            <?php include('parties/app-sidebar.php')?>
            <div class="dashboard_content_container" id="dashboard_content_container">
                <?php include('parties/app-topnav.php') ?>
                <div class="dashboard_content">
                    <div class="dashboard_content_main">
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>