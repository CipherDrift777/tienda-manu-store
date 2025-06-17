<?php
session_start();
require 'db/conexion.php';

$usuario = $_POST['usuario'];
$pass = $_POST['pass'];

$sql = "SELECT * FROM usuarios WHERE email = ?";
$stmt = $conexion->prepare($sql);
$stmt->execute([$usuario]);
$usuarioBD = $stmt->fetch();

if ($usuarioBD && password_verify($pass, $usuarioBD['password'])) {
    $_SESSION['usuario'] = $usuarioBD['nombre'];
    $_SESSION['email'] = $usuarioBD['email'];
    $_SESSION['rol'] = $usuarioBD['rol_id'];
    $_SESSION['id'] = $usuarioBD['id'];
    $_SESSION['identificado'] = true;
    header("Location: index.php");
    exit;
} else {
    echo "<script>
        alert('Correo o contraseña incorrectos.');
        window.location.href='index.php?error=1';
    </script>";
    exit;
}
