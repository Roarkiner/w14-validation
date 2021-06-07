<?php session_start();
    $admin = (isset($_SESSION['name']) && $_SESSION['name'] === 'Admin');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/ffvii.css">
    <title>FFVII</title>
</head>
<body>
    <?php include('./templates/header.php') ?>

    <main>
        <h1>L'univers de <span>FINAL FANTASY VII</span></h1>
        <?php if( $admin ): ?>
            <p>Envie d'enlever du contenu? <a href='./filter.php'>Cliquez ici.</a></p>
        <?php endif ?>

        <?php if( ($admin && $_SESSION['syn'] === 'on') || !$admin ): ?>
            <section>
                <h2>Résumé rapide</h2>
                <p>La Shinra, une organisation industrielle et politique détenant le pouvoir sur toute la planète, tire sans se soucier de l'équilibre naturel les ressources souterraines de MAKO, la très puissante énergie se trouvant dans le sol et nécessaire à la survie de la planète. AVALANCHE, un groupe de réactionnaires, décide d'empêcher la Shinra de vider ces réserves énergétiques en faisant exploser les extracteurs de MAKO. Ils font appels à Cloud, ex-recrue du SOLDAT, une faction de l'armée de la Shinra. Au cours d'une expédition au quartier général de la Shinra, le groupe AVALANCHE découvre le corps sans vie du président de l'entreprise. Cette situation est liées à divers événements qui se sont passés plusieurs années auparavant dans divers lieux de la planète.                
                </br>
                Votre périple vous mène en différents endroits, non seulement à la recherche des événements passés, mais également sur les traces du mystérieux individu ayant assassiné le président de la Shinra...</p>
                <p>Source: <a href='https://www.final-fantasy.ch/Ff7/ff7story.php' target='blank'>https://www.final-fantasy.ch/Ff7/ff7story.php</a></p>
            </section>
        <?php endif ?>

        <?php if( ($admin && $_SESSION['char'] === 'on')  || !$admin ): ?>
            <section>
                <h2>Les personnages jouables de FFVII</h2>
                <table>
                    <tr>
                        <td><div><div id='cloud'></div><h3>Cloud Strife</h3></div></td>
                        <td><div><div id='aeris'></div><h3>Aeris Gainsborough</h3></div></td>
                        <td><div><div id='tifa'></div><h3>Tifa Lockhart</h3></div></td>
                    </tr>
                    <tr>
                        <td><div><div id='barret'></div><h3>Barret Wallace</h3></div></td>
                        <td><div><div id='red'></div><h3>Red XIII</h3></div></td>
                        <td><div><div id='cid'></div><h3>Cid Highwind</h3></div></td>
                    </tr>
                    <tr>
                        <td><div><div id='cait'></div><h3>Cait Sith</h3></div></td>
                        <td><div><div id='yuffie'></div><h3>Yuffie Kisaragi</h3></div></td>
                        <td><div><div id='vincent'></div><h3>Vincent Valentine</h3></div></td>
                    </tr>
                </table>
            </section>
        <?php endif ?>

        <?php if( ($admin && $_SESSION['death'] === 'on')  || !$admin ): ?>
            <section>
                <h2>LA MORT D'AERIS (Tu vas avoir envie d'être admin pour faire disparaitre cette section :) )</h2>
                <iframe src="https://www.youtube.com/embed/X3J7zZ6K20g?autoplay=1&controls=0">
            </iframe>
            </section>
        <?php endif ?>
    </main>

    <?php include('./templates/footer.php') ?>
</body>
</html>