<?php 
    try {
        include("conexion.php");

        $offset = (int) $_GET["offset"];
        $limit = (int) $_GET["limit"];

        if($limit==0){
            $limit=10;
        }
        
        // $sentencia = $db->prepare("SELECT id_cliente,nombre,email FROM  clientes limit ? offset ?;"); //sqlite
        $sentencia = $db->prepare("SELECT id_cliente,nombre,email FROM  clientes limit ?, ?;"); //mysql
        $sentencia->bindParam(1, $limit, PDO::PARAM_INT);
        $sentencia->bindParam(2, $offset, PDO::PARAM_INT);
        $sentencia->execute();
        $clientes = $sentencia->fetchall();  
        $db = null;
    } catch (PDOException $error) {
        echo "Error 103: ". $error->getMessage();
    }
?>