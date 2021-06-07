<?php
    session_start();

    include('../data/log.php');

    $email = $_POST['email'];
    $password = $_POST['password'];

    if( $admin['email'] === $email && $admin['password'] === md5($password) ){
        $_SESSION['name'] = $admin['name'];
        $_SESSION['syn'] = 'on';
        $_SESSION['char'] = 'on';
        $_SESSION['death'] = 'on';
        exit(header('Location: ..'));   
    }

    header("Location: ../connection.php?email=$email&error=true");