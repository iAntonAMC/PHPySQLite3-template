<?php 
    try {
        include("conexion.php");
        $id_cliente = (int) $_POST["id_cliente"];
        //echo "id_cliente " . $id_cliente;
        $sentencia = $db->prepare("DELETE FROM clientes WHERE id_cliente=:id_cliente");
        $sentencia->bindParam(":id_cliente", $id_cliente, PDO::PARAM_INT);
        $sentencia->execute();
        $db = null;
        // Redirecciona al index
        header("Location: ../index.php");
        exit();
    } catch (PDOException $error) {
        echo "Error 101: " . $error->getMessage();
    }
?>