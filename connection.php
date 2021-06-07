<?php 
    session_start(); 
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/connection.css">
    <script src="./js/pwd.js" defer></script>
    <title>Connexion</title>
</head>
<body>
    <?php include('./templates/header.php'); ?>

    <main>
        <form action="./controllers/connection_controller.php" method="POST">
            <fieldset>
                <?php if( isset($_GET['error']) ): ?>
                    <p class='error'>Mauvais email et/ou mot de passe.</p>
                <?php endif ?>
                <legend>Connexion</legend>
                <div>
                    <label for="email">Email : </label>
                    <input type="email" name='email' value='<?php if( isset($_GET['email']) ){ echo $_GET['email']; } ?>' required>
                </div>
                <div>
                    <label for="password">Mot de passe : </label>
                    <div id="pwd_input">
                        <input type="password" name='password' id="password" required>
                        <img src="./assets/closed_eye.png" alt="Afficher">
                    </div>
                </div>
            </fieldset>

            <button type="submit" class='submit'>Se connecter</button>
        </form>
    </main>

    <?php include('./templates/footer.php'); ?>
</body>
</html>