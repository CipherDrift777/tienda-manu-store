<?php
session_start();

if (isset($_POST['usuario']) && isset($_POST['pass'])) {

    if ($_POST['usuario'] === 'admin' && $_POST['pass'] == '123') {

        $_SESSION['identificado'] = true;


        header('location: ofertas.php');

        exit;
    } else {

        $_SESSION['identificado'] = false;
    }
}

header('location: index.php');
