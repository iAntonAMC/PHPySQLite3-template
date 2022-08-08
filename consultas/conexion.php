<?php 
    try {
        $db_host = "cxmgkzhk95kfgbq4.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
        $db_username = "q01syfn6oy0g5d4z";
        $db_password = "zb4u3perwq61gktu";
        $db_name = "rzqqccli1jp4pp54";
        $db_port = "3306";
        $db_charset = "utf8";
        $db_collation = "utf8_unicode_ci";
        $db_engine = "InnoDB";

        $db = new PDO("mysql:host=$db_host;dbname=$db_name;port=$db_port;charset=$db_charset;collation=$db_collation", $db_username, $db_password);
        // $db = new PDO("sqlite:sql/clientes.sqlite");
        
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";
    }
    catch (PDOException $error) {
        echo "Error en la conexion: ". $error->getMessage();
    }
?>
