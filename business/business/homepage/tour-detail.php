<?php
    function tour_detail(){
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $sql = "SELECT  * FROM tours WHERE id=$id ";
            $tour_detail = executeQuery_one($sql);

            $id_tour = $_GET['id'];
            $sql2 = "SELECT * FROM tours WHERE id = $id";
            $tour = executeQuery_one($sql2);
            if(isset($_POST['submit'])){
            
                if(!isset($_SESSION['mybill'])){
                    $_SESSION['mybill'] = [];
                }
                $iduser = isset($_SESSION['acc']['id'])?isset($_SESSION['acc']['id']):"";
                $name = $_POST['name'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $cmnd = $_POST['cmnd'];
                $people = $_POST['people'];
                $total = $people * $tour['price'];
                $tour_name = $tour['destination'];
                $start_day = isset($_POST['start_day'])?$_POST['start_day']:$tour['start_day'];
                $discount = $tour['discount'];

                $mybill = [$iduser,$name,$email,$phone,$people,$total,$tour_name,$start_day,$discount,$cmnd];

                $_SESSION['mybill'] = $mybill;
                
                $sql3 = "INSERT INTO bill (iduser,id_tour,name,email,phone,people,start_day,total,tour_name,cmnd) VALUES('$iduser','$id_tour','$name','$email','$phone','$people','$start_day','$total','$tour_name','$cmnd')";
                $bill = executeQuery($sql3);

                header("location: confirmation");
            }
        }
        
        include_once "./views/homepage/layouts/tours/tour-detail.php";
    }
?>