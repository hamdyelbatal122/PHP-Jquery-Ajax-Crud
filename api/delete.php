<?php



 require 'db_config.php';



 $id  = $_POST["id"];



 $sql = "DELETE FROM items WHERE id = '".$id."'";



 $result = $mysqli->query($sql);



 echo json_encode([$id]);



?>