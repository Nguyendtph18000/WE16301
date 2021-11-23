<?php 
    function book_tour(){
        $sql = "SELECT * FROM bill";
        $bills = executeQuery($sql);

        include_once "./views/admin/layouts/tour/booking.php";
    }

    function book_delete(){
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $sql = "DELETE FROM bill WHERE id=$id";
            executeQuery($sql);
            
            header("location: booking");
        }
    }
    function booking_detail(){
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $sql = "SELECT * FROM bill WHERE id=$id";
            $bill_detail = executeQuery_one($sql);
        }
        include_once "./views/admin/layouts/tour/booking-detail.php";
    }
    function booking_edit(){
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $sql = "SELECT * FROM bill WHERE id=$id";
            $bill_detail = executeQuery_one($sql);
            if(isset($_POST['submit'])){
                $name = $_POST['name'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $cmnd = $_POST['cmnd'];
                $people = $_POST['people'];
                $destination = $_POST['destination'];
                $total = $_POST['total'];
                $start_day = $_POST['start_day'];
                $status = $_POST['status'];
                $deposit = $_POST['deposit'];

                $sql2 = "UPDATE bill SET tour_name='$destination',name='$name',email='$email',phone='$phone',people='$people',start_day='$start_day',total='$total',status='$status',deposit='$deposit',cmnd='$cmnd' WHERE id=$id";
                executeQuery_one($sql2);
                header("location: booking");

            }
        }
        include_once "./views/admin/layouts/tour/booking-edit.php";
    }
?>