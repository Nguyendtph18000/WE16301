<?php
    function get_connect(){
        $connect = new PDO("mysql:host=127.0.0.1;dbname=duan1;charset=utf8","root","");
        return $connect;
    }

    function executeQuery($sql, $getAll = true){
        $connect = get_connect();
        $stmt = $connect->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll();
        if($getAll){
            return $data;
        }else{
            if(count($data) > 0){
                return $data[0];
            }
        }
    }
    function executeQuery_one($sql, $getOne = true){
        $connect = get_connect();
        $stmt = $connect->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetch();
        if($getOne){
            return $data;
        }else{
            if(count($data) > 0){
                return $data[0];
            }
        }
    }
    
?>

