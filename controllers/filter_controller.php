<?php
session_start();

if( !isset($_GET['syn']) ){
    $_SESSION['syn'] = 'off';
} else {
    $_SESSION['syn'] = 'on';
}

if( !isset($_GET['char']) ){
    $_SESSION['char'] = 'off';
} else {
    $_SESSION['char'] = 'on';
}

if( !isset($_GET['death']) ){
    $_SESSION['death'] = 'off';
} else {
    $_SESSION['death'] = 'on';
}

header('Location: ../ffvii.php');