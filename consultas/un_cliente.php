<?php 
    try {
        include("conexion.php");
        $id_cliente = (int) $_GET["id_cliente"];
        $sentencia = $db->prepare("SELECT id_cliente,nombre,email FROM  clientes where id_cliente=:id_cliente");
        $sentencia->bindParam(":id_cliente", $id_cliente, PDO::PARAM_INT);
        $sentencia->execute();
        $cliente = $sentencia->fetch();  
        $db = null;
    } catch (PDOException $error) {
      echo "Error 104: " . $error->getMessage();
    }
?>
   