<?php 
    try {
        include("conexion.php");
        $nombre = $_POST["nombre"];
        $email = $_POST["email"];
        $sentencia = $db->prepare("INSERT INTO clientes(nombre,email) VALUES(:nombre,:email);");
        $sentencia->bindParam(":nombre", $nombre, PDO::PARAM_STR);
        $sentencia->bindParam(":email",$email, PDO::PARAM_STR);
        $sentencia->execute();  

        // named placeholders
        // $data = array("nombre" => $nombre, "email" => $email);
        // $sentencia->execute($data);

        $db = null;
        // Redirecciona al index
        header("Location: ../index.php");
        exit();
    } catch (PDOException $error) {
        echo "Error 102: " . $error->getMessage();
    }
?>
   