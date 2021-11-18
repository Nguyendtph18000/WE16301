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
                     <i class="far fa-calendar"></i>
                     <input class="input-date-picker" type="text" name="s" placeholder="MM / DD / YY" autocomplete="off" readonly="readonly">
                  </div>
                  <div class="input-group width-col-3">
                     <label> Ngày về *</label>
                     <i class="far fa-calendar"></i>
                     <input class="input-date-picker" type="text" name="s" placeholder="MM / DD / YY" autocomplete="off" readonly="readonly">
                  </div>
                  <div class="input-group width-col-3">
                     <label class="screen-reader-text"> search </label>
                     <input type="submit" name="travel-search" value="TÌM KIẾM">
                  </div>
               </div>
            </div>
         </div>
         <!-- search search field html end -->
         <section class="destination-section">
            <div class="container">
               <div class="section-heading">
                  <div class="row align-items-end">
                     <div class="col-lg-7">
                        <h5 class="dash-style">ĐIỂM ĐẾN PHỔ BIẾN</h5>
                        <h2>ĐIỂM ĐẾN HÀNG ĐẦU</h2>
                     </div>
                     <div class="col-lg-5">
                        <div class="section-disc">
                              <!-- Aperiam sociosqu urna praesent, tristique, corrupti condimentum asperiores platea ipsum ad arcu. Nostrud. Aut nostrum, ornare quas provident laoreet nesciunt. -->
                        </div>
                     </div>
                  </div>
               </div>
               <div class="destination-inner destination-three-column">
                  <div class="row">
                     <div class="col-lg-7">
                        <div class="row">
                           <div class="col-sm-6">
                              <div class="desti-item overlay-desti-item">
                                 <figure class="desti-image">
                                    <img src="<?=HOME_ASSESTS?>/images/img1.jpg" alt="">
                                 </figure>
                                 <div class="meta-cat bg-meta-cat">
                                    <a href="#">THAILAND</a>
                                 </div>
                                 <div class="desti-content">
                                    <h3>
                                       <a href="#">Disney Land</a>
                                    </h3>
                                    <div class="rating-start" title="Rated 5 out of 4">
                                       <span style="width: 53%"></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-6">
                              <div class="desti-item overlay-desti-item">
                                 <figure class="desti-image">
                                    <img src="<?=HOME_ASSESTS?>/images/img2.jpg" alt="">
                                 </figure>
                                 <div class="meta-cat bg-meta-cat">
                                    <a href="#">NORWAY</a>
                                 </div>
                                 <div class="desti-content">
                                    <h3>
                                       <a href="#">Besseggen Ridge</a>
                                    </h3>
                                    <div class="rating-start" title="Rated 5 out of 5">
                                       <span style="width: 100%"></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-5">
                        <div class="row">
                           <div class="col-md-6 col-xl-12">
                              <div class="desti-item overlay-desti-item">
                                 <figure class="desti-image">
                                    <img src="<?=HOME_ASSESTS?>/images/img3.jpg" alt="">
                                 </figure>
                                 <div class="meta-cat bg-meta-cat">
                                    <a href="#">NEW ZEALAND</a>
                                 </div>
                                 <div class="desti-content">
                                    <h3>
                                       <a href="#">Oxolotan City</a>
                                    </h3>
                                    <div class="rating-start" title="Rated 5 out of 5">
                                       <span style="width: 100%"></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6 col-xl-12">
                              <div class="desti-item overlay-desti-item">
                                 <figure class="desti-image">
                                    <img src="<?=HOME_ASSESTS?>/images/img4.jpg" alt="">
                                 </figure>
                                 <div class="meta-cat bg-meta-cat">
                                    <a href="#">SINGAPORE</a>
                                 </div>
                                 <div class="desti-content">
                                    <h3>
                                       <a href="#">Marina Bay Sand City</a>
                                    </h3>
                                    <div class="rating-start" title="Rated 5 out of 4">
                                       <span style="width: 60%"></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="btn-wrap text-center">
                     <a href="#" class="button-primary">ĐIỂM ĐẾN KHÁC</a>
                  </div>
               </div>
            </div>
         </section>
         <!-- Home packages section html start -->
         <section class="package-section">
            <div class="container">
               <div class="section-heading text-center">
                  <div class="row">
                     <div class="col-lg-8 offset-lg-2">
                        <h5 class="dash-style">KHÁM PHÁ NHỮNG ĐỊA ĐIỂM TUYỆT VỜI</h5>
                        <h2>CÁC GÓI PHỔ BIẾN</h2>
                        <p>Niềm vui êm dịu bạn gặp phải yếu tố thung lũng của cơ thể nơi mà sự thật là một cái gì đó tâng bốc, tâng bốc, ghét làm hài lòng. Huấn luyện vì từ chối khóa học của anh ấy? Xin hãy quan tâm đến chúng tôi nhiều nhất.</p>
                     </div>
                  </div>
               </div>
               <div class="package-inner">
                  <div class="row">
                     <div class="col-lg-4 col-md-6">
                        <div class="package-wrap">
                           <figure class="feature-image">
                              <a href="#">
                                 <img src="<?=HOME_ASSESTS?>/images/img5.jpg" alt="">
                              </a>
                           </figure>
                           <div class="package-price">
                              <h6>
                                 <span>$1,900 </span> / per person
                              </h6>
                           </div>
                           <div class="package-content-wrap">
                              <div class="package-meta text-center">
                                 <ul>
                                    <li>
                                       <i class="far fa-clock"></i>
                                       7D/6N
                                    </li>
                                    <li>
                                       <i class="fas fa-user-friends"></i>
                                       People: 5
                                    </li>
                                    <li>
                                       <i class="fas fa-map-marker-alt"></i>
                                       Malaysia
                                    </li>
                                 </ul>
                              </div>
                              <div class="package-content">
                                 <h3>
                                    <a href="#">Sunset view of beautiful lakeside resident</a>
                                 </h3>
                                 <div class="review-area">
                                    <span class="review-text">(25 reviews)</span>
                                    <div class="rating-start" title="Rated 5 out of 5">
                                       <span style="width: 60%"></span>
                                    </div>
                                 </div>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit luctus nec ullam. Ut elit tellus, luctus nec ullam elit tellpus.</p>
                                 <div class="btn-wrap">
                                    <a href="#" class="button-text width-6">Đặt ngay bây giờ<i class="fas fa-arrow-right"></i></a>
                                    <a href="#" class="button-text width-6">Danh sách yêu thích<i class="far fa-heart"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6">
                        <div class="package-wrap">
                           <figure class="feature-image">
                              <a href="#">
                                 <img src="<?=HOME_ASSESTS?>/images/img6.jpg" alt="">
                              </a>
                           </figure>
                           <div class="package-price">
                              <h6>
                                 <span>$1,230 </span> / per person
                              </h6>
                           </div>
                           <div class="package-content-wrap">
                              <div class="package-meta text-center">
                                 <ul>
                                    <li>
                                       <i class="far fa-clock"></i>
                                       5D/4N
                                    </li>
                                    <li>
                                       <i class="fas fa-user-friends"></i>
                                       People: 8
                                    </li>
                                    <li>
                                       <i class="fas fa-map-marker-alt"></i>
                                       Canada
                                    </li>
                                 </ul>
                              </div>
                              <div class="package-content">
                                 <h3>
                                    <a href="#">Experience the natural beauty of island</a>
                                 </h3>
                                 <div class="review-area">
                                    <span class="review-text">(17 reviews)</span>
                                    <div class="rating-start" title="Rated 5 out of 5">
                                       <span style="width: 100%"></span>
                                    </div>
                                 </div>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit luctus nec ullam. Ut elit tellus, luctus nec ullam elit tellpus.</p>
                                 <div class="btn-wrap">
                                    <a href="#" class="button-text width-6">Đặt ngay bây giờ<i class="fas fa-arrow-right"></i></a>
                                    <a href="#" class="button-text width-6">Danh sách yêu thích<i class="far fa-heart"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6">
                        <div class="package-wrap">
                           <figure class="feature-image">
                              <a href="#">
                                 <img src="<?=HOME_ASSESTS?>/images/img7.jpg" alt="">
                              </a>
                           </figure>
                           <div class="package-price">
                              <h6>
                                 <span>$2,000 </span> / per person
                              </h6>
                           </div>
                           <div class="package-content-wrap">
                              <div class="package-meta text-center">
                                 <ul>
                                    <li>
                                       <i class="far fa-clock"></i>
                                       6D/5N
                                    </li>
                                    <li>
                                       <i class="fas fa-user-friends"></i>
                                       People: 6
                                    </li>
                                    <li>
                                       <i class="fas fa-map-marker-alt"></i>
                                       Portugal
                                    </li>
                                 </ul>
                              </div>
                              <div class="package-content">
                                 <h3>
                                    <a href="#">Vacation to the water city of Portugal</a>
                                 </h3>
                                 <div class="review-area">
                                    <span class="review-text">(22 reviews)</span>
                                    <div class="rating-start" title="Rated 5 out of 5">
                                       <span style="width: 80%"></span>
                                    </div>
                                 </div>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit luctus nec ullam. Ut elit tellus, luctus nec ullam elit tellpus.</p>
                                 <div class="btn-wrap">
                                    <a href="#" class="button-text width-6">Đặt ngay bây giờ<i class="fas fa-arrow-right"></i></a>
                                    <a href="#" class="button-text width-6">Danh sách yêu thích<i class="far fa-heart"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="btn-wrap text-center">
                     <a href="#" class="button-primary">XEM TẤT CẢ CÁC GÓI</a>
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
                        <h5 class="dash-style">DU LỊCH BẰNG HOẠT ĐỘNG</h5>
                        <h2>CUỘC PHIÊU LƯU VÀ HOẠT ĐỘNG</h2>
                        <!-- <p>Niềm vui êm dịu bạn gặp phải yếu tố thung lũng của cơ thể nơi mà sự thật là một cái gì đó tâng bốc, tâng bốc, ghét làm hài lòng. Huấn luyện vì từ chối khóa học của anh ấy? Xin hãy quan tâm đến chúng tôi nhiều nhất.</p> -->
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
                     <div class="col-md-6 col-lg-4">
                        <div class="special-item">
                           <figure class="special-img">
                              <img src="<?=HOME_ASSESTS?>/images/img9.jpg" alt="">
                           </figure>
                           <div class="badge-dis">
                              <span>
                                 <strong>20%</strong>
                                 off
                              </span>
                           </div>
                           <div class="special-content">
                              <div class="meta-cat">
                                 <a href="#">CANADA</a>
                              </div>
                              <h3>
                                 <a href="#">Trải nghiệm vẻ đẹp tự nhiên của sông băng</a>
                              </h3>
                              <div class="package-price">
                                 Price:
                                 <del>$1500</del>
                                 <ins>$1200</ins>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6 col-lg-4">
                        <div class="special-item">
                           <figure class="special-img">
                              <img src="<?=HOME_ASSESTS?>/images/img10.jpg" alt="">
                           </figure>
                           <div class="badge-dis">
                              <span>
                                 <strong>15%</strong>
                                 off
                              </span>
                           </div>
                           <div class="special-content">
                              <div class="meta-cat">
                                 <a href="#">NEW ZEALAND</a>
                              </div>
                              <h3>
                                 <a href="#">Đi bộ đến địa điểm cắm trại trên núi</a>
                              </h3>
                              <div class="package-price">
                                 Price:
                                 <del>$1300</del>
                                 <ins>$1105</ins>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6 col-lg-4">
                        <div class="special-item">
                           <figure class="special-img">
                              <img src="<?=HOME_ASSESTS?>/images/img11.jpg" alt="">
                           </figure>
                           <div class="badge-dis">
                              <span>
                                 <strong>15%</strong>
                                 off
                              </span>
                           </div>
                           <div class="special-content">
                              <div class="meta-cat">
                                 <a href="#">MALAYSIA</a>
                              </div>
                              <h3>
                                 <a href="#">Cảnh hoàng hôn của thành phố ven hồ xinh đẹp</a>
                              </h3>
                              <div class="package-price">
                                 Price:
                                 <del>$1800</del>
                                 <ins>$1476</ins>
                              </div>
                           </div>
                        </div>
                     </div>
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
      <a id="backTotop" href="#" class="to-top-icon">
         <i class="fas fa-chevron-up"></i>
      </a>
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
   <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="<?=HOME_ASSESTS?>js/jquery.js"></script>
   <script src="../../../cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
   <script src="<?=HOME_ASSESTS?>vendors/bootstrap/js/bootstrap.min.js"></script>
   <script src="<?=HOME_ASSESTS?>vendors/jquery-ui/jquery-ui.min.js"></script>
   <script src="<?=HOME_ASSESTS?>vendors/countdown-date-loop-counter/loopcounter.js"></script>
   <script src="<?=HOME_ASSESTS?>js/jquery.counterup.js"></script>
   <script src="<?=HOME_ASSESTS?>vendors/modal-video/jquery-modal-video.min.js"></script>
   <script src="<?=HOME_ASSESTS?>vendors/masonry/masonry.pkgd.min.js"></script>
   <script src="<?=HOME_ASSESTS?>vendors/lightbox/dist/js/lightbox.min.js"></script>
   <script src="<?=HOME_ASSESTS?>vendors/slick/slick.min.js"></script>
   <script src="<?=HOME_ASSESTS?>js/jquery.slicknav.js"></script>
   <script src="<?=HOME_ASSESTS?>js/custom.min.js"></script>
</body>

</html>