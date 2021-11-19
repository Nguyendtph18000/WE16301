<?php
    function list_tour_avtive(){
        $sql = "SELECT * FROM tours WHERE status=0";
        $tours = executeQuery($sql,true);

        include_once "./views/admin/layouts/tour/tour-active.php";
    }
    function list_tour_expired(){
        $sql = "SELECT * FROM tours WHERE status=1";
        $tours = executeQuery($sql,true);
        include_once "./views/admin/layouts/tour/tour-expired.php";
    }
    function del_tour(){
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $sql = "DELETE FROM tours WHERE id=$id";
            executeQuery_one($sql);
        }
    }
    function save_del_tour_act(){
        list_tour_avtive();
        include_once "./views/admin/layouts/tour/tour-active.php";
    }
    function save_del_tour_exp(){
        list_tour_expired();
        include_once "./views/admin/layouts/tour/tour-expired.php";
    }
    
    function add_tour(){
        include_once "./views/admin/layouts/tour/add-tour.php";

        if(isset($_POST['publish'])){
            $destination = isset($_POST['destination'])?$_POST['destination']:'';
            $people = isset($_POST['size'])?$_POST['size']:'';
            
            $days = isset($_POST['days'])?$_POST['days']:'';
            $nights = isset($_POST['nights'])?$_POST['nights']:'';
            $price = isset($_POST['price'])?$_POST['price']:'';
            $discount = isset($_POST['discount'])?$_POST['discount']:'';
            $title = isset($_POST['title'])?$_POST['title']:'0';
            $description = $_POST['description'];

            $file = $_FILES['image-tour'];
            // Lưu ảnh
            if($file['size'] > 0){
                $filename =$file['name'];
                move_uploaded_file($file['tmp_name'], './public/homepage/assets/images/' . $filename);
                $image =$filename;
            }
            else{
                $image = "";
            }

            $file_img_detail = $_FILES['image-tour-detail'];

            if($file_img_detail['size'] > 0){
                $filenamedetail = $file_img_detail['name'];
                move_uploaded_file($file['tmp_name'], './public/homepage/assets/images/' . $filename);
                $image_detail =$filenamedetail;
            }
            else{
                $image_detail = "";
            }
            $sql = "INSERT INTO tours (destination,people,days,nights,price,discount,image,status,title,description,detail_photo) VALUES('$destination','$people','$days','$nights','$price','$discount','$image','$status','$title','$description','$image_detail')  ";
            executeQuery($sql);
    
        }
    }

    function edit_tour(){
        if(isset($_GET['id'])){
            $id = $_GET['id'];

            $sql = "SELECT * FROM tours WHERE id=$id";
            $oldData = executeQuery($sql,false);

            if(isset($_POST['publish'])){
                $destination = isset($_POST['destination'])?$_POST['destination']:'';
                $people = isset($_POST['size'])?$_POST['size']:'';
                
                $days = isset($_POST['days'])?$_POST['days']:'';
                $nights = isset($_POST['nights'])?$_POST['nights']:'';
                $price = isset($_POST['price'])?$_POST['price']:'';
                $discount = isset($_POST['discount'])?$_POST['discount']:'';
                $status = $_POST['status'];
                $title = isset($_POST['title'])?$_POST['title']:'0';
                $description = $_POST['description'];

                $file = $_FILES['image-tour'];
                // Lưu ảnh
                if($file['size'] > 0){
                    $filename =$file['name'];
                    move_uploaded_file($file['tmp_name'], './public/homepage/assets/images/' . $filename);
                    $image =$filename;
                }
                else{
                    $image = $oldData['image'];
                }
    
                $file_img_detail = $_FILES['image-tour-detail'];
    
                if($file_img_detail['size'] > 0){
                    $filenamedetail = $file_img_detail['name'];
                    move_uploaded_file($file['tmp_name'], './public/homepage/assets/images/' . $filename);
                    $image_detail =$filenamedetail;
                }
                else{
                    $image_detail = $oldData['detail_photo'];
                }

                $sql = "UPDATE tours SET destination='$destination',people='$people',days='$days',nights='$nights',price='$price',discount='$discount',image='$image',status='$status',title='$title',description='$description',detail_photo='$image_detail' WHERE id=$id";
                executeQuery_one($sql);
            }

        }
        include_once "./views/admin/layouts/tour/edit-tour.php";
    }

?>