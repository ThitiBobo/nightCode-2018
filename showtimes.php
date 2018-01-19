<?php
    header('content-type:application/json; charset: UTF-8');
    
    if(!isset($_GET['id'])){
        $array = [
            ['id' => 1],
            ['id' => 2]
        ];
        echo json_encode($array);
    }else{
        echo json_encode(['id' => $_GET['id']]);
    }

    
?>