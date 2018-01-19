<?php
    header('content-type:application/json; charset: UTF-8');


if ($_SERVER['REQUEST_METHOD']=='GET'){
    if(!isset($_GET['id'])){
        $array = [
            ['id' => 1, "name" => "star wars"],
            ['id' => 2, "name" => "nfdjhg"]
        ];
        echo json_encode($array);
    }else{
        echo json_encode(['id' => $_GET['id'], "name" => "star wars"]);
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
