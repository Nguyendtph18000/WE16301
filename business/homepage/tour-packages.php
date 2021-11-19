<?php
    function tour_packages(){
        $sql = "SELECT  * FROM tours";
        $tours = executeQuery($sql);
        include_once "./views/homepage/layouts/tours/tour-packages.php";
    }
    
?>