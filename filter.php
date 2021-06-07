<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/filter.css">
    <title>Filtre</title>
</head>
<body>
<?php include('./templates/header.php'); ?>

<?php if( isset($_SESSION['name']) && $_SESSION['name'] === 'Admin' ): ?>
    <main>
        <h1>Trier le contenu</h1>
        <form action="./controllers/filter_controller.php" method="get">
            <p>Décochez les sections que vous ne voulez pas voir</p>
            <fieldset>
                <div>
                    <div>
                        <label for="syn">Résumé</label>
                        <input type="checkbox" name="syn" class='checkbox' <?php if( $_SESSION['syn'] === 'on' ){ echo 'checked'; } ?>>
                    </div>
                    <div>
                        <label for="char">Personnages jouables</label>
                        <input type="checkbox" name="char" class='checkbox' <?php if( $_SESSION['char'] === 'on' ){ echo 'checked'; } ?>>
                    </div>
                    <div>
                        <label for="death">Mort d'Aerith</label>
                        <input type="checkbox" name="death" class='checkbox' <?php if( $_SESSION['death'] === 'on' ){ echo 'checked'; } ?>>
                    </div>
                </div>
            </fieldset>

            <input type="submit" value="Trier" id="submit">
        </form>
    </main>
<?php else: ?>
    <?php include('./templates/non_admin.php') ?>
<?php endif ?>

<?php include('./templates/footer.php'); ?>
</body>
</html>