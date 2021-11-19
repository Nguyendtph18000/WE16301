<!doctype html>
<html lang="en">
   
<head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      
      <title>Du lịch | Danh sách </title>
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
            
            <div class="db-info-wrap db-package-wrap">
                <div class="dashboard-box table-opp-color-box">
                    <h4>Danh sách tour</h4>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Điểm đến</th>
                                    <th>Số lượng người</th>
                                    <th>Ngày</th>
                                    <th>Đêm</th>
                                    <th>Giá</th>
                                    <th>Giảm giá (%)</th>
                                    <th>Trạng thái</th>
                                    <th>Hoạt động</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($tours as $t): ?>
                                    <!-- nth-of-tye(odd):Vị trí lẻ (even:chẵn) -->
                                    <tr>
                                        <td>
                                            </span><span class="package-name"><?=$t['destination']?></span>
                                        </td>
                                        <td><?=$t['people']?></td>

                                        <td><?=$t['days']?></td>
                                        <td><?=$t['nights']?></td>

                                        <td><?=$t['price']?></td>
                                        <td><?=$t['discount']?></td>

                                        <td><span class="badge badge-success"><?php echo $t['status']==0?"Hoạt động":"Hết hạn"; ?></span></td>
                                        <td>
                                            <a href="<?=BASE_URL?>cp-admin/tour-edit&&id=<?=$t['id']?>">
                                                <span class="badge badge-success"><i class="far fa-edit"></i></span>
                                            </a>
                                            <a href="<?=BASE_URL?>cp-admin/tour-active-delete&&id=<?=$t['id']?>" onclick="return confirm('Xác nhận xóa!')">
                                                <span class="badge badge-danger"><i class="far fa-trash-alt"></i></span>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- pagination html -->
                <div class="pagination-wrap">
                    <nav class="pagination-inner">
                        <ul class="pagination disabled">
                            <li class="page-item"><span class="page-link"><i class="fas fa-chevron-left"></i></span></li>
                            <li class="page-item"><a href="#" class="page-link active">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- Content / End -->
           
        </div>
        <!-- Dashboard / End -->
    </div>
    <!-- end Container Wrapper -->
    <!-- *Scripts* -->
    <?php include_once "./views/admin/layouts/js.php" ?>

</body>

</html>