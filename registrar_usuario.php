<?php
require 'db/conexion.php';

// Recibir datos del formulario
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$password = $_POST['password'];
$rol_id = $_POST['rol_id'];

// Validar si ya existe ese email
$sql = "SELECT id FROM usuarios WHERE email = ?";
$stmt = $conexion->prepare($sql);
$stmt->execute([$email]);

if ($stmt->fetch()) {
    echo "El correo ya está registrado. <a href='registro.php'>Volver</a>";
    exit;
}

// Encriptar contraseña
$hash = password_hash($password, PASSWORD_DEFAULT);

// Insertar nuevo usuario
$sql = "INSERT INTO usuarios (nombre, email, password, rol_id) VALUES (?, ?, ?, ?)";
$stmt = $conexion->prepare($sql);

try {
    $stmt->execute([$nombre, $email, $hash, $rol_id]);
    header("Location: login.php?registro=ok");
} catch (PDOException $e) {
    echo "Error al registrar: " . $e->getMessage();
}
