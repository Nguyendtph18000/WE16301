<!doctype html>
<html lang="en">
   
<!-- Mirrored from demo.bosathemes.com/html/travele/admin/db-add-package.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Nov 2021 08:35:38 GMT -->
<head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      
      <title>Du lịch | Thêm tour </title>
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
            <div class="db-info-wrap db-add-tour-wrap">
                <div class="row">
                    <!-- Listings -->
                    <form action="" method="post" enctype="multipart/form-data">
                    <div class="col-lg-8 col-xl-12">
                        <div class="dashboard-box">
                            <div class="custom-field-wrap">
                                <div class="form-group">
                                    <label>Tiêu đề</label>
                                    <input type="text" name="title">
                                </div>
                                <div class="form-group">
                                    <label>Mô tả</label>
                                    <textarea name="description"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="dashboard-box">
                            <div class="custom-field-wrap">
                                <h4>Ngày và giá</h4>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Điểm đến</label>
                                            <input type="text" name="destination">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Số lượng người</label>
                                            <input type="number" name="size" placeholder="Số lượng người">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label style="font-size: 14px;">Thời lượng chuyến đi</label>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <input type="number" name="days" placeholder="Ngày">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <input type="number" name="nights" placeholder="Đêm">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>Giá</label>
                                            <input type="text" name="price">
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>Giảm giá</label>
                                            <input type="text" name="discount">
                                        </div>
                                    </div>
                                    <!-- <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Loại</label>
                                            <select>
                                                <option value="1">Người lớn</option>
                                                <option value="2">trẻ em</option>
                                                <option value="3">Cặp đôi</option>
                                            </select>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="dashboard-box">
                            <h4>Hình ảnh</h4>
                            <div class="custom-field-wrap">
                                <div class="dragable-field">
                                    <div class="dragable-field-inner">
                                        <div class="upload-input">
                                            <div class="form-group">
                                              <label for="file" class="upload-btn" style="background-color: #0791BE;color:#ffffff;padding:10px;cursor:pointer">Tải lên hình ảnh</label>
                                              <input type="file" name="image-tour" id="file" hidden>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="dashboard-box">
                            <h4>Hình ảnh chi tiết</h4>

                                <div class="custom-field-wrap">
                                    <div class="dragable-field">
                                        <div class="dragable-field-inner">
                                            <div class="upload-input">
                                                <div class="form-group">
                                                <label for="file-detail" class="upload-btn" style="background-color: #4BB95D;color:#ffffff;padding:10px;cursor:pointer">Tải lên hình ảnh</label>
                                                <input type="file" name="image-tour-detail" id="file-detail" hidden>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="publish-action">
                                    <input type="submit" name="publish" value="Đăng">
                                </div>
                            
                        </div>
                        
                    </div>
                    </form>
                </div>      
            </div>
            <!-- Content / End -->
            <!-- Copyrights -->
            
        </div>
        <!-- Dashboard / End -->
    </div>
    <!-- end Container Wrapper -->
    <!-- end Container Wrapper -->
    <?php include_once "./views/admin/layouts/js.php" ?>

</body>

</html>