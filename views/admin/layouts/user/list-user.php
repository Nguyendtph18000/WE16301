<!doctype html>
<html lang="en">
   
<!-- Mirrored from demo.bosathemes.com/html/travele/admin/user.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Nov 2021 08:35:03 GMT -->
<head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      
      <title>Du lịch | Danh sách người dùng</title>
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
                        <div class="dashboard-box table-opp-color-box">
                            <h4>Danh sách người dùng</h4>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Người dùng</th>
                                            <th>Tên</th>
                                            <th>Số điện thoại</th>
                                            <th>Email</th>
                                            <th>Tên đăng nhập</th>
                                            <!-- <th>Địa chỉ</th> -->
                                            <th>CMND/CCCD</th>
                                            <th>Vai trò</th>
                                            <th>Chỉnh sửa</th>
                                            <th>Xóa bỏ</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($users as $u): ?>
                                            <tr>
                                                
                                                <td><span class="list-img"><img src="<?=PUBLIC_ASSETS?><?=$u['image']?>" alt="" ></span>
                                                </td>
                                                <td><a href="#"><span class="list-name"><?=$u['name']?></span></a>
                                                </td>
                                                <td><a href="tel:0964540635"><?=$u['phone']?></a></td>
                                                <td><a href="mailto:quanntph18231@fpt.edu.vn" class="__cf_email__" ><?=$u['email']?></a></td>
                                                <td><?=$u['username']?></td>
                                                
                                                <!-- <td><?=$u['address']?></td> -->
                                                <td>
                                                    <span class=""><?=$u['cmnd'] ?></span>
                                                </td>
                                                <td>
                                                    <span class="badge badge-success"><?=$u['role']==1?'Quản trị':'Khách hàng' ?></span>
                                                </td>
                                                <td>
                                                    <a href="<?=BASE_URL?>cp-admin/user-edit&&id=<?=$u['id']?>">
                                                        <span class="badge badge-success">
                                                            <i class="far fa-edit"></i>
                                                        </span>
                                                    </a> 
                                                    
                                                </td>
                                                <td>
                                                    <a href="<?=BASE_URL?>cp-admin/user-delete&&id=<?=$u['id']?>" onclick="return confirm('Xác nhận xóa!')">
                                                        <span class="badge badge-danger">
                                                            <i class="far fa-trash-alt"></i>
                                                        </span>
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php endforeach ?>
                                        
                                    </tbody>
                                </table>
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
    <!-- *Scripts* -->
    <?php 
        include_once "./views/admin/layouts/js.php";
    ?>
</body>

</html>