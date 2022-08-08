<?php 
    try {
        $db_host = "127.0.0.1";
        $db_username = "root";
        $db_password = "toor";
        $db_name = "papeleria";
        $db_port = "3306";
        $db_charset = "utf8";
        $db_collation = "utf8_unicode_ci";
        $db_engine = "InnoDB";

        // $db = new PDO("mysql:host=$db_host;dbname=$db_name;port=$db_port;charset=$db_charset;collation=$db_collation", $db_username, $db_password);
        $db = new PDO("sqlite:sql/clientes.sqlite");
        
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";
    }
    catch (PDOException $error) {
        echo "Error en la conexion: ". $error->getMessage();
    }
?>
