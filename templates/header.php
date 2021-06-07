<header>
    <nav>
        <div id="bg_li"><img src="./assets/burger_menu.svg" alt="Burger menu" id='burger_menu'></div>
        <ul id='menu'>
            <li><a href="./">Accueil</a></li>
            <li><a href="./ffvii.php">FFVII</a></li>
            <?php if( !isset($_SESSION['name']) ): ?>
                <li><a href="./connection.php">Connexion</a></li>
            <?php else: ?>
                <li><a href="./controllers/deconnection_controller.php">Déconnexion</a></li>
            <?php endif ?>
        </ul>
    </nav>
</header>
<script src="./js/header.js" defer></script>