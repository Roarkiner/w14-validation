<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/index.css">
    <title>Acceuil</title>
</head>
<body>
    <?php include('./templates/header.php') ?>

    <main>
        <h1>BIENVENUE</h1>
        <?php if( isset( $_SESSION['name'] )): ?>
            <div class='h2_div'>
                <img src="./assets/sword.png" alt="Epée">
                <h2> <?= $_SESSION['name'] ?> </h2>
            </div>
        <?php endif ?>
        <p>Ici on parle de FFVII.</p>
    </main>

    <?php include('./templates/footer.php') ?>
</body>
</html>