<?php
    function tour_detail(){
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $sql = "SELECT  * FROM tours WHERE id=$id ";
            $tour_detail = executeQuery_one($sql);
        }
        include_once "./views/homepage/layouts/tours/tour-detail.php";
    }
?>