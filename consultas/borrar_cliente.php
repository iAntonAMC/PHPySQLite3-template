<?php 
    try {
        $id_cliente = $_POST["id_cliente"];
        
        //echo "id_cliente " . $id_cliente;
        
        $db = new PDO('sqlite:../sql/clientes.sqlite');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sentencia = $db->prepare("DELETE FROM clientes WHERE id_cliente=?");
        $sentencia->execute([$id_cliente]);
        $db = null;
        header("Location: ../index.php");
        exit();
    } catch (PDOException $ex) {
      echo "UPS algo paso: " . $ex->getMessage();
    }
?>