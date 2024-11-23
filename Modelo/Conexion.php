<?php
class Conexion {
    public static function StartUp() {
        try {
            // Crear una nueva conexión PDO
            $pdo = new PDO('mysql:host=localhost;dbname=scoregestionproyects;charset=utf8', 'root', '');
            
            // Configurar el manejo de errores
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            // Devolver el objeto PDO
            return $pdo;
        } catch (PDOException $e) {
            // Manejo de errores en caso de fallar la conexión
            die("Error de conexión: " . $e->getMessage());
        }
    }
}
?>
