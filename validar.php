<?php
session_start();

if (isset($_POST['usuario']) && isset($_POST['pass'])) {

    if ($_POST['usuario'] === 'admin' && $_POST['pass'] == '123') {

        $_SESSION['identificado'] = true;
        $_SESSION['usuario'] = $_POST['usuario'];


        header('location: index.php');

        exit;
    } else {

        $_SESSION['identificado'] = false;
        header('location: login.php?error=1"');
        exit();
    }
}
