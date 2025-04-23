<?php
session_start();

if (isset($_POST['usuario']) && isset($_POST['pass'])) {

    if ($_POST['usuario'] === 'admin' && $_POST['pass'] == '123') {

        $_SESSION['identificado'] = true;
        echo 'has entrado';

        header('location: ofertas.php');

        exit;
    } else {

        $_SESSION['identificado'] = false;
        echo 'incorrecto';
    }
}

header('location: index.php');
