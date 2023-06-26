<?php 
    try {
        include("conexion.php");
        $id_cliente = (int) $_POST["id_cliente"];
        $nombre = $_POST["nombre"];
        $email = $_POST['email'];
        //echo "id_cliente " . $id_cliente;
        //echo "nombre " . $nombre;
        //echo "email " . $email;
        $sentencia = $db->prepare("UPDATE clientes set nombre=:nombre, email=:email WHERE id_cliente=:id_cliente");
        $sentencia->bindParam(":nombre", $nombre, PDO::PARAM_STR);
        $sentencia->bindParam(":email",$email, PDO::PARAM_STR);
        $sentencia->bindParam(":id_cliente", $id_cliente, PDO::PARAM_INT);
        $sentencia->execute();
        $db = null;
        header("Location: ../index.php");
        exit();
    } catch (PDOException $error) {
        echo "Error 100: " . $error->getMessage();
    }
?>