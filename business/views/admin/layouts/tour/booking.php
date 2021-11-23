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
                    <h4>Đặt chỗ</h4>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Khách hàng</th>
                                    <th>Ngày đi</th>
                                    <th>Điểm đến</th>
                                    <th>Số người</th>
                                    <th>Tổng chi phí</th>
                                    <th>Đặt cọc</th>
                                    <th>Trạng thái</th>
                                    <th>Hoạt động</th>
                                    <th>Chi tiết</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- <?php var_dump($bills) ?> -->
                                <?php foreach($bills as $b): ?>
                                    <tr>
                                        <td>
                                            <span class="list-img">
                                                <!-- <img src="<?=PUBLIC_ASSETS?><?=$u['image']?>" alt=""> -->
                                            </span><span class="list-enq-name"><?=$b['name']?></span>
                                        </td>
                                        <td><?=$b['start_day'] ?></td>
                                        <td><?=$b['tour_name'] ?></td>
                                        <td><?=$b['people']?></td>
                                        <td><?=number_format($b['total'],0,".",",")?> đ</td>
                                        <td>
                                            <span class="badge badge-successs"> <?=$b['deposit']==0?"Chưa đặt cọc":"Đã đặt cọc" ?> </span>
                                        </td>
                                        <?php if($b['status']==1): ?>
                                            <td><span class="badge badge-success"><?php echo "Chấp nhận" ?></span></td>
                                        <?php elseif($b['status']==2): ?>
                                            <td><span class="badge badge-danger"><?php echo "Từ chối" ?></span></td>
                                        <?php else: ?>
                                            <td><span class="badge badge-primary"><?php echo "Đang xử lý" ?></span></td>
                                        <?php endif ?>
                                        
                                        
                                        <td>
                                            <a href="<?=BASE_URL?>cp-admin/booking-edit&&id=<?=$b['id']?>">
                                                <span class="badge badge-success"><i class="far fa-edit"></i></span>
                                            </a>

                                            <a href="<?=BASE_URL?>cp-admin/booking-delete&&id=<?=$b['id']?>" onclick="return confirm('Xác nhận xóa !')">
                                                <span class="badge badge-danger"><i class="far fa-trash-alt"></i></span>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="<?=BASE_URL?>cp-admin/booking-detail&&id=<?=$b['id']?>" class="badge badge-info" style="color:#ffffff"> Chi tiết </a>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Content / End -->
            <!-- Copyrights -->
            
        </div>
        <!-- Dashboard / End -->
    </div>
    <!-- end Container Wrapper -->
    <?php include_once "./views/admin/layouts/js.php" ?>
    
</body>

</html>