<?php



require 'db_config.php';



  $post = $_POST;



  $sql = "INSERT INTO items (title,description) 



	VALUES ('".$post['title']."','".$post['description']."')";



  $result = $mysqli->query($sql);



  $sql = "SELECT * FROM items Order by id desc LIMIT 1"; 



  $result = $mysqli->query($sql);



  $data = $result->fetch_assoc();



echo json_encode($data);



?>