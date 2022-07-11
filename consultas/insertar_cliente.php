<?php 
    try {
        $db = new PDO('sqlite:../sql/clientes.sqlite');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $nombre = $_POST["nombre"];
        $email = $_POST['email'];
        $sentencia = $db->prepare("INSERT INTO clientes(nombre,email) VALUES(?,?);");
        $sentencia->execute([$nombre,$email]);
        $db = null;
        // Redirecciona al index
        header("Location: ../index.php");
        exit();
    } catch (PDOException $error) {
        echo "Error 102: " . $error->getMessage();
    }
?>
   