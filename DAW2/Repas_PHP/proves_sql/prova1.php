<?php
try {
    // Crear la conexión usando PDO (con el puerto correcto)
    $conn = new PDO("mysql:host=localhost;port=3308", "root", "1234");
    // Establecer el modo de error de PDO a excepción
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Crear la base de datos 'prova1' si no existe
    $sql = "CREATE DATABASE IF NOT EXISTS prova1";
    $conn->exec($sql);
    echo "Base de datos 'prova1' creada o ya existe.<br>";

    // Seleccionar la base de datos 'prova1'
    $conn->exec("USE prova1");

    // Crear tabla 'usuarios' si no existe
    $sql = "CREATE TABLE IF NOT EXISTS usuarios (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        nombre VARCHAR(50) NOT NULL,
        email VARCHAR(50),
        fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    $conn->exec($sql);
    echo "Tabla 'usuarios' creada o ya existe.<br>";

    // Insertar datos de ejemplo en la tabla 'usuarios'
    $sql = "INSERT INTO usuarios (nombre, email) VALUES 
            ('Juan Pérez', 'juan@example.com'),
            ('Ana López', 'ana@example.com'),
            ('Carlos García', 'carlos@example.com')";
    $conn->exec($sql);
    echo "Datos insertados en la tabla 'usuarios'.<br>";
}
catch(PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}

// Cerrar la conexión (automático al final del script)
?>
