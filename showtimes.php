<?php
    header('content-type:application/json; charset: UTF-8');
    
    if(!isset($_GET['id'])){
        $array = [
            ['id' => 1, "name" => "star wars"],
            ['id' => 2, "name" => "nfdjhg"]
        ];
        echo json_encode($array);
    }else{
        echo json_encode(['id' => $_GET['id'], "name" => "star wars"]);
    }

    
?>