<!doctype html>
<html lang="en">
<head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <title>Du lịch </title>
      <?php include_once "./views/homepage/layouts/style.php" ?>
</head>
<body class="home">
   <div id="siteLoader" class="site-loader">
      <div class="preloader-content">
         <img src="<?=HOME_ASSESTS?>/images/loader1.gif" alt="">
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
         <!-- Home slider html start -->
         <section class="home-slider-section">
            <div class="home-slider">
               <div class="home-banner-items">
                  <div class="banner-inner-wrap" style="background-image: url(<?=HOME_ASSESTS?>/images/inner-banner.jpg);"></div>
                     <div class="banner-content-wrap">
                        <div class="container">
                           <div class="banner-content text-center">
                              <h3 class="banner-title">Du lịch để tạo ra những kỷ niệm trên khắp mọi nơi</h3>
                              
                           </div>
                        </div>
                     </div>
                  <div class="overlay"></div>
               </div>
            </div>
         </section>
         <!-- slider html start -->
         <!-- Home search field html start -->
         <div class="trip-search-section shape-search-section">
            <div class="slider-shape"></div>
            <div class="container">
               <div class="trip-search-inner white-bg d-flex">
                  <div class="input-group">
                     <label> Điểm đến *</label>
                     <input type="text" name="s" placeholder="Nhập điểm đến">
                  </div>
                  <div class="input-group">
                     <label> Số người *</label>
                     <input type="text" name="s" placeholder="Số người">
                  </div>
                  <div class="input-group width-col-3">
                     <label> Ngày đi *</label>
                     <input class="" type="date" name="start_day">
                  </div>
                  <div class="input-group width-col-3">
                     <label> Ngày về *</label>
                     <input class="" type="date" name="end_day">

                  </div>
                  <div class="input-group width-col-3">
                     <label class="screen-reader-text"> search </label>
                     <input type="submit" name="travel-search" value="TÌM KIẾM">
                  </div>
               </div>
            </div>
         </div>
         <!-- search search field html end -->
         
         <!-- Home packages section html start -->
         <section class="package-section">
            <div class="container">
               <div class="section-heading text-center">
                  <div class="row">
                     <div class="col-lg-8 offset-lg-2">
                        <h5 class="dash-style">KHÁM PHÁ NHỮNG ĐỊA ĐIỂM TUYỆT VỜI</h5>
                        <h2>CÁC GÓI PHỔ BIẾN</h2>
                        <!-- <p>Niềm vui êm dịu bạn gặp phải yếu tố thung lũng của cơ thể nơi mà sự thật là một cái gì đó tâng bốc, tâng bốc, ghét làm hài lòng. Huấn luyện vì từ chối khóa học của anh ấy? Xin hãy quan tâm đến chúng tôi nhiều nhất.</p> -->
                     </div>
                  </div>
               </div>
               <div class="package-inner">
                  <div class="row">
                     <!-- <?php echo var_dump($tours_active);
                     ?> -->
                     
                     <?php foreach($tours_active as $t): ?>
                        <div class="col-lg-4 col-md-6">
                           <div class="package-wrap" style="box-shadow: 0px 0px 35px 0px rgba(0, 0, 0, 0.08);">
                              <figure class="feature-image">
                                 <a href="<?=BASE_URL?>tour-detail&&id=<?=$t['id']?>">
                                    <img src="<?=PUBLIC_HOME_ASSETS?><?=$t['image']?>" alt="">
                                 </a>
                              </figure>
                              <div class="package-price">
                                 <h6>
                                    <span><?=number_format($t['price'],0,"." ,"," )?> </span> / Người
                                 </h6>
                              </div>
                              <div class="package-content-wrap">
                                 <div class="package-meta text-center" style="background-color: #0791BE;margin-bottom: 24px;margin-left: 16px;margin-right: 16px;margin-top: -36px;padding: 12px 0;position: relative;">
                                    <div style="color:#ffffff;padding-bottom:10px">
                                       Ngày đi: <?=$t['start_day']?> 
                                    </div>
                                    <ul>
                                       <li>
                                          <i class="far fa-clock"></i>
                                          <?=$t['days']?>N / <?=$t['nights']?>Đ
                                       </li>
                                       <li>
                                          <i class="fas fa-user-friends"></i>
                                          Số người: <?=$t['people']?>
                                       </li>
                                       <li>
                                          <i class="fas fa-map-marker-alt"></i>
                                          <?=$t['destination']?>
                                       </li>
                                    </ul>
                                    <div></div>

                                 </div>
                                 <div class="package-content">
                                    <h3>
                                       <a href="<?=BASE_URL?>tour-detail&&id=<?=$t['id']?>"><?=$t['title']?></a>
                                    </h3>
                                    <!-- <div class="review-area">
                                       <span class="review-text">(22 reviews)</span>
                                       <div class="rating-start" title="Rated 5 out of 5">
                                          <span style="width: 80%"></span>
                                       </div>
                                    </div> -->
                                    <p><?=$t['description'] ?></p>
                                    <div class="btn-wrap">
                                       <a href="#" class="button-text width-12">Đặt ngay bây giờ<i class="fas fa-arrow-right"></i></a>
                                       <!-- <a href="#" class="button-text width-6">Danh sách yêu thích<i class="far fa-heart"></i></a> -->
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     <?php endforeach ?>
                  </div>
                  <div class="btn-wrap text-center">
                     <a href="<?=BASE_URL?>tour-packages" class="button-primary">XEM TẤT CẢ CÁC GÓI</a>
                  </div>
               </div>
            </div>
         </section>
         <!-- packages html end -->
         
         <!-- Home activity section html start -->
         <section class="activity-section">
            <div class="container">
               <div class="section-heading text-center">
                  <div class="row">
                     <div class="col-lg-8 offset-lg-2">
                        <h5 class="dash-style">HOẠT ĐỘNG DU LỊCH</h5>
                        <h2>CUỘC PHIÊU LƯU VÀ HOẠT ĐỘNG</h2>
                       
                     </div>
                  </div>
               </div>
               <div class="activity-inner row">
                  <div class="col-lg-2 col-md-4 col-sm-6">
                     <div class="activity-item">
                        <div class="activity-icon">
                           <a href="#">
                              <img src="<?=HOME_ASSESTS?>/images/icon6.png" alt="">
                           </a>
                        </div>
                        <div class="activity-content">
                           <h4>
                              <a href="#">Cuộc Phiêu Lưu</a>
                           </h4>
                           <p>15 Điểm đến</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-2 col-md-4 col-sm-6">
                     <div class="activity-item">
                        <div class="activity-icon">
                           <a href="#">
                              <img src="<?=HOME_ASSESTS?>/images/icon10.png" alt="">
                           </a>
                        </div>
                        <div class="activity-content">
                           <h4>
                              <a href="#">Đi Bộ Đường Dài</a>
                           </h4>
                           <p>12 Điểm đến</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-2 col-md-4 col-sm-6">
                     <div class="activity-item">
                        <div class="activity-icon">
                           <a href="#">
                              <img src="<?=HOME_ASSESTS?>/images/icon9.png" alt="">
                           </a>
                        </div>
                        <div class="activity-content">
                           <h4>
                              <a href="#">Lửa Trại</a>
                           </h4>
                           <p>7 Điểm đến</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-2 col-md-4 col-sm-6">
                     <div class="activity-item">
                        <div class="activity-icon">
                           <a href="#">
                              <img src="<?=HOME_ASSESTS?>/images/icon8.png" alt="">
                           </a>
                        </div>
                        <div class="activity-content">
                           <h4>
                              <a href="#">Đường Sắt</a>
                           </h4>
                           <p>15 Điểm đến</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-2 col-md-4 col-sm-6">
                     <div class="activity-item">
                        <div class="activity-icon">
                           <a href="#">
                              <img src="<?=HOME_ASSESTS?>/images/icon7.png" alt="">
                           </a>
                        </div>
                        <div class="activity-content">
                           <h4>
                              <a href="#">Cắm Trại</a>
                           </h4>
                           <p>13 Điểm đến</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-2 col-md-4 col-sm-6">
                     <div class="activity-item">
                        <div class="activity-icon">
                           <a href="#">
                              <img src="<?=HOME_ASSESTS?>/images/icon11.png" alt="">
                           </a>
                        </div>
                        <div class="activity-content">
                           <h4>
                              <a href="#">Khám Phá</a>
                           </h4>
                           <p>25 Điểm đến</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- activity html end -->
         <!-- Home special section html start -->
         <section class="special-section">
            <div class="container">
               <div class="section-heading text-center">
                  <div class="row">
                     <div class="col-lg-8 offset-lg-2">
                        <h5 class="dash-style">ƯU ĐÃI & GIẢM GIÁ DU LỊCH</h5>
                        <h2>ƯU ĐÃI DU LỊCH ĐẶC BIỆT</h2>
                        <!-- <p>Mollit voluptatem perspiciatis convallis elementum corporis quo veritatis aliquid blandit, blandit torquent, odit placeat. Adipiscing repudiandae eius cursus? Nostrum magnis maxime curae placeat.</p> -->
                     </div>
                  </div>
               </div>
               <div class="special-inner">
                  <div class="row">
                     <?php foreach($tours_discount as $td): ?>
                     <div class="col-md-6 col-lg-4">
                        <div class="special-item">
                           <figure class="special-img">
                              <a href="<?=BASE_URL?>tour-detail&&id=<?=$td['id']?>">
                                 <img src="<?=PUBLIC_HOME_ASSETS?><?=$td['image']?>" alt="">
                              </a>
                           </figure>
                           <div class="badge-dis">
                              <span>
                                 <strong> - <?=$td['discount']?>%</strong>
                                 
                              </span>
                           </div>
                           <div class="special-content">
                              <div class="meta-cat">
                                 <a href="<?=BASE_URL?>tour-detail&&id=<?=$td['id']?>"><?=$td['destination']?></a>
                              </div>
                              <h3>
                                 <a href="<?=BASE_URL?>tour-detail&&id=<?=$td['id']?>"><?=$td['title']?></a>
                              </h3>
                              <!-- string number_format ( float $number , $decimals = 0 , $dec_point = "." , $thousands_sep = "," ); -->
                              <!-- $number là số cần định dạng.
                              $decimals là số chữ số thập phân muốn lấy, mặc định sẽ là 0.
                              $dec_point là kí tự phân cách với phần thập phân, mặc định là dấu " . ".
                              $thousands_sep là kí tự phân cách giữa các nhóm hàng nghìn, mặc định là dấu " , ". -->
                              <div class="package-price">
                                 Giá:
                                 <del><?=number_format($td['price'],0,"." ,"," )?>đ</del>
                                 <ins><?=number_format(ceil($td['price']*(1-$td['discount']/100)),0,"." ,"," ) ?>đ</ins>
                              </div>
                           <div><?php $td['start_day']."-".$td['end_day'] ?></div>

                           </div>

                        </div>
                     </div>
                     <?php endforeach ?>
                     
                  </div>
               </div>
            </div>
         </section>
         <!-- special html end -->
         <!-- Home special section html start -->
         <section class="best-section">
            <div class="container">
               <div class="row">
                  <div class="col-lg-5">
                     <div class="section-heading">
                        <h5 class="dash-style">BỘ SƯU TẬP TOUR CỦA CHÚNG TÔI</h5>
                        <h2>ẢNH DU LỊCH ĐƯỢC CHIA SẺ NHIỀU NHẤT </h2>
                        <!-- <p>Tôi sẽ mở cái nồi với cách trang trí hiện tại, thứ nước sốt hư hỏng buồn bã rải đầy đường phố đến tận mũi tàu. Nostrud. Được? Ai trong chúng ta cũng không biết cách trang trí để mang lại nhiều thú vui và thậm chí là ghét bỏ mọi người.</p> -->
                     </div>
                     <figure class="gallery-img">
                        <img src="<?=HOME_ASSESTS?>/images/img12.jpg" alt="">
                     </figure>
                  </div>
                  <div class="col-lg-7">
                     <div class="row">
                        <div class="col-sm-6">
                           <figure class="gallery-img">
                              <img src="<?=HOME_ASSESTS?>/images/img13.jpg" alt="">
                           </figure>
                        </div>
                        <div class="col-sm-6">
                           <figure class="gallery-img">
                              <img src="<?=HOME_ASSESTS?>/images/img14.jpg" alt="">
                           </figure>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-12">
                           <figure class="gallery-img">
                              <img src="<?=HOME_ASSESTS?>/images/img15.jpg" alt="">
                           </figure>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- best html end -->
         <!-- Home client section html start -->
         <div class="client-section">
            <div class="container">
               <div class="client-wrap client-slider secondary-bg">
                  <div class="client-item">
                     <figure>
                        <img src="<?=HOME_ASSESTS?>/images/logo1.png" alt="">
                     </figure>
                  </div>
                  <div class="client-item">
                     <figure>
                        <img src="<?=HOME_ASSESTS?>/images/logo2.png" alt="">
                     </figure>
                  </div>
                  <div class="client-item">
                     <figure>
                        <img src="<?=HOME_ASSESTS?>/images/logo3.png" alt="">
                     </figure>
                  </div>
                  <div class="client-item">
                     <figure>
                        <img src="<?=HOME_ASSESTS?>/images/logo4.png" alt="">
                     </figure>
                  </div>
                  <div class="client-item">
                     <figure>
                        <img src="<?=HOME_ASSESTS?>/images/logo5.png" alt="">
                     </figure>
                  </div>
                  <div class="client-item">
                     <figure>
                        <img src="<?=HOME_ASSESTS?>/images/logo2.png" alt="">
                     </figure>
                  </div>
               </div>
            </div>
         </div>
         <!-- client html end -->
         <!-- Home subscribe section html start -->
         <section class="subscribe-section" style="background-image: url(<?=HOME_ASSESTS?>/images/img16.jpg);">
            <div class="container">
               <div class="row">
                  <div class="col-lg-7">
                     <div class="section-heading section-heading-white">
                        <h5 class="dash-style">ƯU ĐÃI TRỌN GÓI NGÀY LỄ</h5>
                        <h2>GIẢM GIÁ ĐẶC BIỆT 25% TRONG NGÀY LỄ!</h2>
                        <h4>Đăng ký ngay để nhận những ưu đãi hấp dẫn và thông tin về các gói tour, thông tin cập nhật và giảm giá tốt nhất !!</h4>
                        <div class="newsletter-form">
                           <form>
                              <input type="email" name="s" placeholder="Địa chỉ email của bạn">
                              <input type="submit" name="signup" value="ĐĂNG KÝ NGAY!">
                           </form>
                        </div>
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo. Eaque adipiscing, luctus eleifend temporibus occaecat luctus eleifend tempo ribus.</p> -->
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- subscribe html end -->
         <!-- Home blog section html start -->
         <section class="blog-section">
            <div class="container">
               <div class="section-heading text-center">
                  <div class="row">
                     <div class="col-lg-8 offset-lg-2">
                        <h5 class="dash-style">BLOG CỦA CHÚNG TÔI</h5>
                        <h2>BÀI ĐĂNG GẦN ĐÂY CỦA CHÚNG TÔI</h2>
                        <!-- <p>Mollit voluptatem perspiciatis convallis elementum corporis quo veritatis aliquid blandit, blandit torquent, odit placeat. Adipiscing repudiandae eius cursus? Nostrum magnis maxime curae placeat.</p> -->
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-6 col-lg-4">
                     <article class="post">
                        <figure class="feature-image">
                           <a href="#">
                              <img src="<?=HOME_ASSESTS?>/images/img17.jpg" alt="">
                           </a>
                        </figure>
                        <div class="entry-content">
                           <h3>
                              <a href="#">Cuộc sống là một hành trình tươi đẹp không phải là một điểm đến</a>
                           </h3>
                           <div class="entry-meta">
                              <span class="byline">
                                 <a href="#">Demoteam</a>
                              </span>
                              <span class="posted-on">
                                 <a href="#">August 17, 2021</a>
                              </span>
                              <span class="comments-link">
                                 <a href="#">No Comments</a>
                              </span>
                           </div>
                        </div>
                     </article>
                  </div>
                  <div class="col-md-6 col-lg-4">
                     <article class="post">
                        <figure class="feature-image">
                           <a href="#">
                              <img src="<?=HOME_ASSESTS?>/images/img18.jpg" alt="">
                           </a>
                        </figure>
                        <div class="entry-content">
                           <h3>
                              <a href="#">Chỉ để lại kỷ niệm, chỉ để lại dấu chân</a>
                           </h3>
                           <div class="entry-meta">
                              <span class="byline">
                                 <a href="#">Demoteam</a>
                              </span>
                              <span class="posted-on">
                                 <a href="#">August 17, 2021</a>
                              </span>
                              <span class="comments-link">
                                 <a href="#">No Comments</a>
                              </span>
                           </div>
                        </div>
                     </article>
                  </div>
                  <div class="col-md-6 col-lg-4">
                     <article class="post">
                        <figure class="feature-image">
                           <a href="#">
                              <img src="<?=HOME_ASSESTS?>/images/img19.jpg" alt="">
                           </a>
                        </figure>
                        <div class="entry-content">
                           <h3>
                              <a href="#">Hành trình được đo lường tốt nhất ở những người bạn mới</a>
                           </h3>
                           <div class="entry-meta">
                              <span class="byline">
                                 <a href="#">Demoteam</a>
                              </span>
                              <span class="posted-on">
                                 <a href="#">August 17, 2021</a>
                              </span>
                              <span class="comments-link">
                                 <a href="#">No Comments</a>
                              </span>
                           </div>
                        </div>
                     </article>
                  </div>
               </div>
            </div>
         </section>
            <!-- blog html end -->
            
         <!-- Home contact details section html start -->
         <section class="contact-section">
            <div class="container">
               <div class="row">
                  <div class="col-lg-4">
                     <div class="contact-img" style="background-image: url(<?=HOME_ASSESTS?>/images/img24.jpg);">
                     </div>
                  </div>
                  <div class="col-lg-8">
                     <div class="contact-details-wrap">
                        <div class="row">
                           <div class="col-sm-4">
                              <div class="contact-details">
                                 <div class="contact-icon">
                                    <img src="<?=HOME_ASSESTS?>/images/icon12.png" alt="">
                                 </div>
                                 <ul>
                                    <li>
                                       <a href="#"><span class="__cf_email__" data-cfemail="b6c5c3c6c6d9c4c2f6d1dbd7dfda98d5d9db">[email&#160;protected]</span></a>
                                    </li>
                                    <li>
                                       <a href="#"><span class="__cf_email__" data-cfemail="046d6a626b44606b69656d6a2a676b69">[email&#160;protected]</span></a>
                                    </li>
                                    <li>
                                       <a href="#"><span class="__cf_email__" data-cfemail="8de3ece0e8cdeee2e0fdece3f4a3eee2e0">[email&#160;protected]</span></a>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                           <div class="col-sm-4">
                              <div class="contact-details">
                                 <div class="contact-icon">
                                    <img src="<?=HOME_ASSESTS?>/images/icon13.png" alt="">
                                 </div>
                                 <ul>
                                    <li>
                                       <a href="#">+132 (599) 254 669</a>
                                    </li>
                                    <li>
                                       <a href="#">+123 (669) 255 587</a>
                                    </li>
                                    <li>
                                       <a href="#">+01 (977) 2599 12</a>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                           <div class="col-sm-4">
                              <div class="contact-details">
                                 <div class="contact-icon">
                                    <img src="<?=HOME_ASSESTS?>/images/icon14.png" alt="">
                                 </div>
                                 <ul>
                                    <li>
                                       3146 Koontz, California
                                    </li>
                                    <li>
                                       Quze.24 Second floor
                                    </li>
                                    <li>
                                       36 Street, Melbourne
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="contact-btn-wrap">
                        <h3>HÃY LIÊN HỆ VỚI CHÚNG TÔI ĐỂ ĐƯỢC CẬP NHẬT THÊM !!</h3>
                        <a href="#" class="button-primary">Tìm hiểu thêm</a>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!--  contact details html end -->
      </main>
      <?php include_once "./views/homepage/layouts/footer.php" ?>
      <!-- <a  href="#backtotop" class="to-top-icon">
         <i class="fas fa-chevron-up"></i>
      </a> -->
      
   </div>

   <!-- JavaScript -->
   <?php include_once "./views/homepage/layouts/js.php" ?>
</body>

</html>