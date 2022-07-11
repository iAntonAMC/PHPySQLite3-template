<?php 
    try {
      $nombre = $_POST["nombre"];
      $email = $_POST['email'];
       
      $db = new PDO('sqlite:../sql/clientes.sqlite');
      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sentencia = $db->prepare("INSERT INTO clientes(nombre,email) VALUES(?,?);");
      $sentencia->execute([$nombre,$email]);
      $db = null;
    } catch (PDOException $ex) {
      echo "UPS algo paso: " . $ex->getMessage();
    }
?>
   