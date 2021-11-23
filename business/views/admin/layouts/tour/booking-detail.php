<!doctype html>
<html lang="en">
   
<head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      
      <title>Travele | Đặt tour </title>

      <?php include_once "./views/admin/layouts/style.php" ?>

</head>
<body>

    <!-- start Container Wrapper -->
    <div id="container-wrapper">
        <!-- Dashboard -->
        <div id="dashboard" class="dashboard-container">
        <?php  
                include_once "./views/admin/layouts/header.php";
                include_once "./views/admin/layouts/navbar.php"
            ?>
            <div class="db-info-wrap db-booking">
                <div class="dashboard-box table-opp-color-box">
                    <form action="" method="post">
                        <h4 style="padding-bottom: 15px;border-bottom: 2px solid #ccc;" >Chi tiết</h4>
                        <div class="table-responsive" style="display: flex;flex-wrap:wrap;">

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Họ và tên</label>
                                    <input type="text" class="form-control" name="name" value="<?=$bill_detail['name']?>">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Số điện thoại</label>
                                    <input type="text" class="form-control" name="phone" value="<?=$bill_detail['phone']?>">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" class="form-control" name="email" value="<?=$bill_detail['email']?>">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>CMND / CCCD</label>
                                    <input type="text" class="form-control" name="cmnd" value="<?=$bill_detail['cmnd']?>">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Số người</label>
                                    <input type="number" class="form-control" name="people" value="<?=$bill_detail['people']?>">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Điểm đến</label>
                                    <input type="text" class="form-control" name="destination" value="<?=$bill_detail['tour_name']?>">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Tổng chi phí</label>
                                    <input type="text" class="form-control" name="total" value="<?=$bill_detail['total']?>">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Ngày đến</label>
                                    <input type="text" class="form-control" name="start_day" value="<?=$bill_detail['start_day']?>">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Trạng thái</label>
                                    <input type="text" class="form-control" name="status" value="<?php 
                                        if($bill_detail['status']==1){
                                            echo "Chấp nhận";
                                        }
                                        elseif($bill_detail['status']==2){
                                            echo "Từ chối";
                                        }else{
                                            echo "Chưa xử lý";
                                        }
                                    ?>">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Đặt cọc</label>
                                    <input type="text" class="form-control" name="deposit" value="<?=$bill_detail['deposit']==0?"Chưa đặt cọc":"Đã đặt cọc"?>">
                                </div>
                            </div>
                            
                        </form>

                    </div>
                </div>
            </div>
            <!-- Content / End -->
            
        </div>
        <!-- Dashboard / End -->
    </div>
    <!-- end Container Wrapper -->
    <?php include_once "./views/admin/layouts/js.php" ?>
    
</body>

</html>