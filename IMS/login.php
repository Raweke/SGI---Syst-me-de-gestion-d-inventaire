<?php
    session_start();

    if(isset($_SESSION['user'])) header('Location: dashboard.php');

    $error_message = '';
    
    if($_POST){
        include('database/connexion.php');

        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = 'SELECT * FROM users WHERE users.email="'. $username .'" AND users.password="'. $password .'"';
        $stmt = $conn->prepare($query);
        $stmt->execute();

        if($stmt->rowCount() > 0){
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $user = $stmt->fetchAll()[0];
            $_SESSION['user'] = $user;

            header('Location: dashboard.php');
        } else $error_message = "Assurez vous que l'utilisateur et le mot de passe sont corrects.";
    } 

?>


<!DOCTYPE HTML>
<html>
<head>
    <title>SGI Login - Système de gestion d'inventaire</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body id="loginBody">
    <?php if(!empty($error_message)){ ?>
    <div id="errorMessage">
        <p>Erreur: <?= $error_message ?></p>
    </div>
    <?php } ?>
    <div class="container">
        <div class="loginHeader">
                <h1>SGI</h1>
                <p>SYSTÈME DE GESTION D'INVENTAIRE</p>
        </div>
        <div class="loginBody">
            <form action="login.php" method="POST">
                <div class="loginContainer">
                    <label for="">Utilisateur</label>
                    <input placeholder="utilisateur" name="username" type="text"/>
                </div>
                <div class="loginContainer">
                    <label for="">Mot de passe</label>
                    <input placeholder="mot de passe" name="password" type="password"/>
                </div>
                <div class="loginButtonContainer">
                    <button>Se connecter</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>