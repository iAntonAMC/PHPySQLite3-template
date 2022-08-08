<?php 
    try {
        $db_host = "x71wqc4m22j8e3ql.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
        $db_username = "y1vq1dvswxlhzo8q";
        $db_password = "neo6dzwzew336zfy";
        $db_name = "ozyctasxrl9vksgn";
        $db_port = "3306";
        $db_charset = "utf8";
        $db_collation = "utf8_unicode_ci";
        $db_engine = "InnoDB";

        $db = new PDO("mysql:host=$db_host;dbname=$db_name;port=$db_port;charset=$db_charset;collation=$db_collation", $db_username, $db_password);
        // $db = new PDO("sqlite:sql/clientes.sqlite");
        
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch (PDOException $error) {
        echo "Error en la conexion: ". $error->getMessage();
    }
?>
