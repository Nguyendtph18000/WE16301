<?php
    function list_tour_avtive(){
        $sql = "select * from tours";
        $tours = executeQuery($sql);

        include_once "./views/admin/layouts/tour/tour-active.php";
    }

    function add_tour(){
        include_once "./views/admin/layouts/tour/add-tour.php";

//         destination
// size
// days
// nights
// price
// discount
// myfile

        if(isset($_POST['publish'])){
            $destination = isset($_POST['destination'])?$_POST['destination']:'';
            $size = isset($_POST['size'])?$_POST['size']:'';
            
            $country = isset($_POST['country'])?$_POST['country']:'';
            $phone = isset($_POST['phone'])?$_POST['phone']:'';
            $email = isset($_POST['email'])?$_POST['email']:'';
            $username = isset($_POST['username'])?$_POST['username']:'';
            $pass = isset($_POST['password'])?$_POST['password']:'';
            $role = isset($_POST['role'])?$_POST['role']:'0';
            $myfile = isset($_FILES['myfile']['name'])?$_FILES['myfile']['name']:'';
            $sql = "INSERT INTO user (name,username,password,phone,email,address,cmnd,image,role) VALUES('$name','$username','$pass','$phone','$email','$country','$cmnd','$myfile','$role')  ";
            executeQuery($sql);
    
        }
    }
?>