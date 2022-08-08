<?php 
    try {
        $db = new PDO("sqlite:sql/clientes.sqlite");
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $offset = (int) $_GET["offset"];
        $limit = (int) $_GET["limit"];

        if($limit==0){
            $limit=10;
        }
        
        $sentencia = $db->prepare("SELECT id_cliente,nombre,email FROM  clientes limit ? offset ?;");
        $sentencia->execute([$limit, $offset]);
        $clientes = $sentencia->fetchall();  
        $db = null;
    } catch (PDOException $error) {
        echo "Error 103: ". $error->getMessage();
    }
?>