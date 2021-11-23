<!doctype html>
<html lang="en">
   
<!-- Mirrored from demo.bosathemes.com/html/travele/confirmation.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Nov 2021 08:34:12 GMT -->
<head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <title>Travele | Xác nhận </title>
      <?php include_once "./views/homepage/layouts/style.php" ?>

   </head>
   <body>
      <div id="siteLoader" class="site-loader">
         <div class="preloader-content">
            <img src="<?=HOME_ASSESTS?>images/loader1.gif" alt="">
         </div>
      </div>
      <div id="page" class="full-page">
         <header id="masthead" class="site-header header-primary">
            <!-- header html start -->
            <?php 
            include_once "./views/homepage/layouts/top-header.php";
            include_once "./views/homepage/layouts/bottom-header.php"
            ?>
            <div class="mobile-menu-container"></div>
         </header>
         <main id="content" class="site-main">
            <!-- Inner Banner html start-->
            <section class="inner-banner-wrap">
               <div class="inner-baner-container" style="background-image: url(<?=HOME_ASSESTS?>images/inner-banner.jpg);">
                  <div class="container">
                     <div class="inner-banner-content">
                        <h1 class="inner-title">Đặt trước</h1>
                     </div>
                  </div>
               </div>
               <div class="inner-shape"></div>
            </section>
            <!-- Inner Banner html end-->
            <div class="step-section cart-section">
               <div class="container">
                     
                  <div class="confirmation-outer">
                     <div class="success-notify">
                        <div class="success-icon">
                           <i class="fas fa-check"></i>
                        </div>
                        <div class="success-content">
                           <h3>XÁC NHẬN ĐẶT TOUR </h3>
                           <p>Cảm ơn bạn, chúng tôi sẽ liên hệ xác nhận tour với bạn trong thời gian ngắn nhất</p>
                        </div>

                     </div>
                     <!-- <?php var_dump($_SESSION['mybill']) ?> -->

                     <div class="confirmation-inner">
                        <div class="row">
                           <div class="col-lg-8 right-sidebar">
                              <div class="confirmation-details">
                                 <h3>Chi tiết đặt tour</h3>
                                 <table class="table">
                                    <tbody>
                                       <!-- <tr>
                                          <td>Booking id:</td>
                                          <td>999-QSDE-55</td>
                                       </tr> -->
                                       <tr>
                                          <td>Họ và tên:</td>
                                          <td><?php echo $_SESSION['mybill'][1] ?></td>
                                       </tr>
                                       <tr>
                                          <td>Email:</td>
                                          <td><a href=""><?php echo $_SESSION['mybill'][2] ?></a></td>
                                       </tr>
                                       <tr>
                                          <td>Số điện thoại</td>
                                          <td><?php echo $_SESSION['mybill'][3] ?></td>
                                       </tr>
                                       <tr>
                                          <td>CMND / CCCD</td>
                                          <td><?php echo $_SESSION['mybill'][9] ?></td>
                                       </tr>
                                       <tr>
                                          <td>Số người</td>
                                          <td><?php echo $_SESSION['mybill'][4] ?></td>
                                       </tr>
                                       <tr>
                                          <td>Điểm đến</td>
                                          <td><?php echo $_SESSION['mybill'][6] ?></td>
                                       </tr>
                                       <tr>
                                          <td>Ngày đi</td>
                                          <td><?php echo $_SESSION['mybill'][7] ?></td>
                                       </tr>
                                       
                                    </tbody>
                                 </table>
                                 <!-- <div class="details payment-details">
                                    <h3>PAYMENT</h3>
                                    <div class="details-desc">
                                       <p>Payment is successful via Master card</p>
                                    </div>
                                 </div>
                                 <div class="details">
                                    <h3>VIEW BOOKING DETAILS</h3>
                                    <div class="details-desc">
                                       <p><a href="#">https://www.travele.com/sadsd-f646556</a></p>
                                    </div>
                                 </div> -->
                              </div>
                           </div>
                           <div class="col-lg-4">
                              <aside class="sidebar">
                                 <div class="widget-bg widget-table-summary">
                                    <h4 class="bg-title">Tổng tiền</h4>
                                    <table>
                                       <tbody>
                                          <tr>
                                             <td>
                                                <strong>Chi phí gói </strong>
                                             </td>
                                             <td class="text-right">
                                                <?php echo number_format($_SESSION['mybill'][5],0,".",",") ?>
                                             </td>
                                          </tr>

                                          <?php if($_SESSION['mybill'][8]>0): ?>
                                             <tr>
                                                <td>
                                                   <strong>Giảm giá</strong>
                                                </td>
                                                <td class="text-right">
                                                   <?php echo $_SESSION['mybill'][8] ?> %
                                                </td>
                                             </tr>
                                          <?php endif ?>
                                          
                                          
                                          <tr class="total">
                                             <td>
                                                <strong>Tổng chi phí</strong>
                                             </td>
                                             <td class="text-right">
                                                <strong>
                                                   <?php 
                                                      $total = $_SESSION['mybill'][5]*(1-$_SESSION['mybill'][8]/100); 
                                                      echo number_format($total,0,"." ,"," );
                                                   ?> đ
                                                </strong>

                                             </td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </div>
                                 <div class="widget-bg widget-support-wrap">
                                    <div class="icon">
                                       <i class="fas fa-phone-volume"></i>
                                    </div>
                                    <div class="support-content">
                                       <h5>Hỗ trợ</h5>
                                       <a href="telto:0964540635" class="phone">0964540635</a>
                                       <small>Thứ Hai đến thứ Bảy, 8:00 sáng - 7:00 tối</small>
                                    </div>
                                 </div>
                              </aside>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- step three form html end -->
               </div>
            </div>
         </main>
         <?php include_once "./views/homepage/layouts/footer.php" ?>
         <!-- <a id="backTotop" href="#" class="to-top-icon">
            <i class="fas fa-chevron-up"></i>
         </a> -->
         <!-- custom search field html -->
         <div class="header-search-form">
            <div class="container">
               <div class="header-search-container">
                  <form class="search-form" role="search" method="get" >
                     <input type="text" name="s" placeholder="Enter your text...">
                  </form>
                  <a href="#" class="search-close">
                     <i class="fas fa-times"></i>
                  </a>
               </div>
            </div>
         </div>
         <!-- header html end -->
      </div>

      <!-- JavaScript -->
      <?php include_once "./views/homepage/layouts/js.php" ?>

   </body>

</html>