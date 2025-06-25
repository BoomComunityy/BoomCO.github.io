<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$database = "base_img";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Validar si se envió el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $description = $_POST['description']; // Descripción de la imagen
    $targetDir = "C:/xampp/htdocs/Boom/assets/uploads/"; // Carpeta donde se guardarán las imágenes
    $fileName = basename($_FILES["image"]["name"]);
    $targetFilePath = $targetDir . $fileName;

    // Validar que sea una imagen
    $fileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));
    $allowedTypes = ["jpg", "jpeg", "png", "gif"];

    if (in_array($fileType, $allowedTypes)) {
        // Subir el archivo
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath)) {
            // Insertar detalles en la base de datos
            $sql = "INSERT INTO datos (file_name, file_path, description) VALUES ('$fileName', '$targetFilePath', '$description')";

            if ($conn->query($sql) === TRUE) {
                echo "La imagen se subió y guardó correctamente.";
            } else {
                echo "Error al guardar en la base de datos: " . $conn->error;
            }
        } else {
            echo "Error al subir la imagen.";
        }
    } else {
        echo "Solo se permiten formatos JPG, JPEG, PNG y GIF.";
    }
}

$conn->close();
?>
