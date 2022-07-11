<?php 
    try {
        $db = new PDO('sqlite:sql/clientes.sqlite');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $id_cliente = $_GET["id_cliente"];
        $sentencia = $db->prepare("SELECT id_cliente,nombre,email FROM  clientes where id_cliente=?");
        $sentencia->execute([$id_cliente]);
        $cliente = $sentencia->fetch();  
        $db = null;
    } catch (PDOException $error) {
      echo "Error 104: " . $error->getMessage();
    }
?>
   