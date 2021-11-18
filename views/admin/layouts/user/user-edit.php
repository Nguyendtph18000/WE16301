<!doctype html>
<html lang="en">
   
<!-- Mirrored from demo.bosathemes.com/html/travele/admin/user-edit.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Nov 2021 08:35:03 GMT -->
<head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      
      <title>Du lịch | Chỉnh sửa người dùng </title>

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
                    <div class="col-lg-12">
                        <div class="dashboard-box user-form-wrap">
                            <h4>Chỉnh sửa chi tiết người dùng</h4>
                            <form class="form-horizontal" method="post" enctype="multipart/form-data">
                                <div class="row">
                                <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Họ và tên *</label>
                                            <input name="name" class="form-control" type="text" value="<?php echo $oldData['name'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>CMND/CCCD</label>
                                            <input name="cmnd" class="form-control" type="text" value="<?php echo $oldData['cmnd'] ?>">
                                        </div>  
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Quê quán</label>
                                            <input name="country" class="form-control" type="text"
                                            value="<?php echo $oldData['address'] ?>">
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Số điện thoại *</label>
                                            <input name="phone" class="form-control" type="text"
                                            value="<?php echo $oldData['phone'] ?>">
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Email *</label>
                                            <input name="email" class="form-control" type="email"
                                            value="<?php echo $oldData['email'] ?>">
                                        </div>  
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Tên đăng nhập *</label>
                                            <input name="username" class="form-control" type="text" value="<?php echo $oldData['username'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Vai trò</label>
                                            <select name="role">
                                                <option value="<?php echo $oldData['role']?>"><?php echo $oldData['role']==0?"Khách hàng":"Quản trị"; ?></option>
                                                <option value="0">Khách hàng</option>
                                                <option value="1">Quản trị</option>
                                            </select>
                                        </div>
                                    </div>
                                   
                                    <div class="col-12">
                                        <h4>Ảnh đại diện</h4>
                                    </div>
                                    <div class="col-sm-6">
                                        <img src="<?=PUBLIC_ASSETS?><?=$oldData['image']?>" alt="">
                                        <div class="upload-input">
                                            <div class="form-group">
                                              <!-- <span class="upload-btn">tải lên 1 ảnh</span> -->
                                              <input type="file" name="avatar" style="margin: 30px 0 0; position:relative;opacity:1;">
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <button type="submit" name="submit" class="button-primary">Cập nhật</button>

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

</html>