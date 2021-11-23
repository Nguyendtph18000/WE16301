<?php
    function tour_packages(){
        $sql = "SELECT  * FROM tours WHERE status=0";
        $tours = executeQuery($sql);
        include_once "./views/homepage/layouts/tours/tour-packages.php";
    }
    
?>