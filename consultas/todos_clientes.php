<?php 
    try {
        $db = new PDO('sqlite:sql/clientes.sqlite');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $clientes = $db->query("SELECT * FROM clientes");
        
        $db = null;
    } catch (PDOException $ex) {
      echo "UPS algo paso ". $ex->getMessage();
    }
?>