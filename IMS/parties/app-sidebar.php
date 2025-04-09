<div class="dashboard_sidebar" id="dashboard_sidebar">
    <h3 class="dashboard_logo" id="dashboard_logo">SGI</h3>
    <div class="dashboard_sidebar_user">
        <img src="images/sdff.jpg" alt="User_image." id="userImage">
        <span><?= $user['nom'] . ' ' . $user['prénom']?></span>
    </div>
    <div class="dashboard_sidebar_menus">
        <ul class="dashboard_menu_lists">
            <li class="menuActive">
                <a href="./dashboard.php" class="menuActive"><i class="fa fa-gauge"></i>Tableau de bord</a>
            </li>
            <li>
                <a href="./users-add.php"><i class="fa fa-gauge"></i>Ajouter un utilisateur</a>
            </li>
        </ul>
    </div>
</div>
