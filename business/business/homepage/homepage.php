<?php

// function index(){
//     include_once './views/homepage/layouts/home.php';
// }
function load_tours(){
    
    $sql = "SELECT * FROM tours WHERE status=0 AND discount=0 order by id desc LIMIT 3";
    $tours_active = executeQuery($sql,true);

    $sql2 = "SELECT * FROM tours WHERE status=0 AND discount>0 order by id desc LIMIT 3";
    $tours_discount = executeQuery($sql2,true);
    include_once './views/homepage/layouts/home.php';

}

?>