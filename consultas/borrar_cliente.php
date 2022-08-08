<?php 
    try {
        include("conexion.php");
        $id_cliente = $_POST["id_cliente"];
        $nombre = $_POST["nombre"];
        $email = $_POST['email'];
        
        //echo "id_cliente " . $id_cliente;
        //echo "nombre " . $nombre;
        //echo "email " . $email;
        
        $sentencia = $db->prepare("UPDATE clientes set nombre=?, email=? WHERE id_cliente=?");
        $sentencia->execute([$nombre,$email,$id_cliente]);
        $db = null;
        // Redirecciona al index
        header("Location: ../index.php");
        exit();
    } catch (PDOException $error) {
        echo "Error 101: " . $error->getMessage();
    }
?>