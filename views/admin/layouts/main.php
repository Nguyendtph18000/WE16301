<!doctype html>
<html lang="en">
   
<!-- Mirrored from demo.bosathemes.com/html/travele/admin/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Nov 2021 08:34:45 GMT -->
<head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      
      <title>Du lịch </title>

      <?php include_once "./views/admin/layouts/style.php" ?>
      
</head>
<body>

    <!-- start Container Wrapper -->
    <div id="container-wrapper">
        <!-- Dashboard -->
        <div id="dashboard" class="dashboard-container">

            <?php 

                include_once "./views/admin/layouts/header.php";
                include_once "./views/admin/layouts/navbar.php";
            
            ?>
            
            <div class="db-info-wrap">
                <div class="row">
                    <!-- Item -->
                    <div class="col-xl-3 col-sm-6">
                        <div class="db-info-list">
                            <div class="dashboard-stat-icon bg-blue">
                                <i class="far fa-chart-bar"></i>
                            </div>
                            <div class="dashboard-stat-content">
                                <h4>Lượt xem hôm nay</h4>
                                <h5>22,520</h5> 
                            </div>
                        </div>
                    </div>
                    <!-- Item -->
                    <div class="col-xl-3 col-sm-6">
                        <div class="db-info-list">
                            <div class="dashboard-stat-icon bg-green">
                                <i class="fas fa-dollar-sign"></i>
                            </div>
                            <div class="dashboard-stat-content">
                                <h4>Thu nhập</h4>
                                <h5>16,520</h5> 
                            </div>
                        </div>
                    </div>
                    <!-- Item -->
                    <div class="col-xl-3 col-sm-6">
                        <div class="db-info-list">
                            <div class="dashboard-stat-icon bg-purple">
                                <i class="fas fa-users"></i>
                            </div>
                            <div class="dashboard-stat-content">
                                <h4>Số người dùng</h4>
                                <h5>18,520</h5> 
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="db-info-list">
                            <div class="dashboard-stat-icon bg-red">
                                <i class="far fa-envelope-open"></i>
                            </div>
                            <div class="dashboard-stat-content">
                                <h4>Phản hồi</h4>
                                <h5>19,520</h5> 
                            </div>
                        </div>
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

<!-- Mirrored from demo.bosathemes.com/html/travele/admin/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Nov 2021 08:35:03 GMT -->
</html>