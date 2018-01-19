<?php
    header('content-type:application/json; charset: UTF-8');
    require 'Database.php';

if ($_SERVER['REQUEST_METHOD']=='GET'){
    if(!isset($_GET['id'])){
        $stmt = Database::getBDD()->prepare('SELECT * FROM nightcode');
		$stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_OBJ);
        echo json_encode($result);
    }else{
        $stmt = Database::getBDD()->prepare('SELECT * FROM nightcode WHERE id = ?');
		$stmt->execute(array($_GET['id']));
        $result = $stmt->fetchAll(PDO::FETCH_OBJ);
        echo json_encode($result);
    }
  }
else if ($_SERVER['REQUEST_METHOD']=='POST')
{
  $array =json_decode(file_get_contents('php://input'), true);
  if(isset($array["name"])){
     echo json_encode(['id' => 1, 'name' => $array['name']]);
  }else{
    http_response_code(400);
  }
}

?>
