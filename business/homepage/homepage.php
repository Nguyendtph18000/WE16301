<?php

function index(){
    include_once './views/homepage/layouts/home.php';
}
function load_tour(){
    $sql = "SELECT * FROM tours WHERE status=0 and discount=0 LIMIT 3";
    $tours = executeQuery($sql,true);
    include_once './views/homepage/layouts/home.php';

}
function load_tour_discount(){
    $sql2 = "SELECT * FROM tours WHERE status=0 and discount>0 LIMIT 3";
    $tours_discount = executeQuery($sql2,true);
    include_once './views/homepage/layouts/home.php';
}
?>