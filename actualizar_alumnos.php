<?php
include('conexion.php');
$pdo = connect(); // Esta variable almacena la función de conexión

try {
    // Verificar si se ha enviado un ID de alumno válido desde el formulario
    if (isset($_POST['alumno_id'])) {
        $alumno_id = $_POST['alumno_id'];
        
        // Crear la consulta de actualización del alumno
        $sql = "UPDATE alumno SET nombres = :nombres, apellidos = :apellidos, email = :email, telefono = :telefono WHERE id = :alumno_id";
        $query = $pdo->prepare($sql);
        
        // Vincular los nuevos valores a los marcadores de posición en la consulta
        $query->bindParam(':nombres', $_POST['nombres'], PDO::PARAM_STR);
        $query->bindParam(':apellidos', $_POST['apellidos'], PDO::PARAM_STR);
        $query->bindParam(':email', $_POST['email'], PDO::PARAM_STR);
        $query->bindParam(':telefono', $_POST['telefono'], PDO::PARAM_STR);
        $query->bindParam(':alumno_id', $alumno_id, PDO::PARAM_INT);
        
        // Ejecutar la consulta de actualización
        $query->execute();
    } else {
        echo 'ID de alumno no proporcionado';
    }
} catch (PDOException $e) {
    echo 'PDOException: ' . $e->getMessage();
}

include('lista_alumnos.php'); // Después de actualizar, muestra la lista de alumnos actualizada
?>
