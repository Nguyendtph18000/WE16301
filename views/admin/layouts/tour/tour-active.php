<!doctype html>
<html lang="en">
   
<!-- Mirrored from demo.bosathemes.com/html/travele/admin/db-package-active.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Nov 2021 08:35:03 GMT -->
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
                                    <th>Trạng thái</th>
                                    <th>Hoạt động</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($tours as $t): ?>
                                    <tr>
                                        <td>
                                            </span><span class="package-name"><?=$t['destination']?></span>
                                        </td>
                                        <td><?=$t['people']?></td>

                                        <td><?=$t['days']?></td>
                                        <td><?=$t['nights']?></td>

                                        <td><?=$t['price']?></td>
                                        <td><span class="badge badge-success"><?php echo isset($t['status'])==0?"Chưa xử lý": "Đang hoạt động" ?></span></td>
                                        <td>
                                            <span class="badge badge-success"><i class="far fa-edit"></i></span>
                                            <span class="badge badge-danger"><i class="far fa-trash-alt"></i></span>
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

<!-- Mirrored from demo.bosathemes.com/html/travele/admin/db-package-active.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Nov 2021 08:35:03 GMT -->
</html>