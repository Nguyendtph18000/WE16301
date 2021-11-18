<!doctype html>
<html lang="en">
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
                include_once "./views/admin/layouts/navbar.php"
            ?>
            
            <div class="db-info-wrap">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="dashboard-box">
                            <h4>Thêm mới người dùng</h4>
                            <form class="form-horizontal" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Họ và tên *</label>
                                            <input name="name" class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>CMND/CCCD</label>
                                            <input name="cmnd" class="form-control" type="text">
                                        </div>  
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Quê quán</label>
                                            <input name="country" class="form-control" type="text">
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Số điện thoại *</label>
                                            <input name="phone" class="form-control" type="text">
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Email *</label>
                                            <input name="email" class="form-control" type="email">
                                        </div>  
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Tên đăng nhập *</label>
                                            <input name="username" class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Mật khẩu *</label>
                                            <input name="password" class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Xác nhận mật khẩu *</label>
                                            <input name="repassword" class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>Vai trò</label>
                                            <select name="role">
                                                <option value="0">Khách hàng</option>
                                                <option value="1">Quản trị</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <label style="font-size: 14px;">Ảnh đại diện</label>
                                        <div class="custom-field-wrap">
                                            <div class="dragable-field">
                                                <div class="dragable-field-inner" style="border: none ;text-align: inherit;padding: 0" >
                                                    <div class="upload-input">
                                                        <div class="form-group">
                                                        <!-- <span class="upload-btn">Tải lên hình ảnh</span> -->
                                                        <input type="file" name="avatar" style="position: relative;opacity:1">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for=""> <?php echo isset($noti)?$noti:'' ?> </label>
                                    </div>
                                </div>
                                <br>
                                <input type="submit" name="Submit" value="Thêm">
                            </form>
                        </div>
                    </div>  
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

<!-- Mirrored from demo.bosathemes.com/html/travele/admin/new-user.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Nov 2021 08:35:03 GMT -->
</html>