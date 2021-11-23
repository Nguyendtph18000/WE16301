<!doctype html>
<html lang="en">
   
<!-- Mirrored from demo.bosathemes.com/html/travele/package-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Nov 2021 08:34:03 GMT -->
<head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <title>Travele | Chi tiết </title>
      <?php include_once "./views/homepage/layouts/style.php" ?>
      <style>
         img{width: 100%;}
      </style>
   </head>
   <body>
      <div id="siteLoader" class="site-loader">
         <div class="preloader-content">
            <img src="assets/images/loader1.gif" alt="">
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
               <div class="inner-baner-container" style="background-image: url(<?=HOME_ASSESTS?>images/inner-banner.jpg);" >
                  <div class="container">
                     <div class="inner-banner-content">
                        <h1 class="inner-title">Chi tiết gói</h1>
                     </div>
                  </div>
               </div>
               <div class="inner-shape"></div>
            </section>
            <!-- Inner Banner html end-->
            <div class="single-tour-section">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-8">
                        <div class="single-tour-inner">
                           <h2><?=$tour_detail['title']?></h2>
                           <figure class="feature-image">
                              <img src="<?=PUBLIC_HOME_ASSETS?><?=$tour_detail['detail_photo']?>" alt="" >
                              <div class="package-meta text-center" style="padding: 10px 0;">
                                 <div style="color:#ffffff;padding-bottom:10px">
                                    Ngày đi: <?=$tour_detail['start_day']?> 
                                 </div>   
                                 <ul>
                                    <li>
                                       <i class="far fa-clock"></i>
                                       <?=$tour_detail['days']?> Ngày / <?=$tour_detail['nights']?> Đêm
                                    </li>
                                    <li>
                                       <i class="fas fa-user-friends"></i>
                                       Số người: <?=$tour_detail['people']?>
                                    </li>
                                    <li>
                                       <i class="fas fa-map-marked-alt"></i>
                                       <?=$tour_detail['destination']?>
                                    </li>
                                 </ul>
                              </div>
                           </figure>
                           <div class="tab-container">
                              <ul class="nav nav-tabs" id="myTab" role="tablist">
                                 <li class="nav-item">
                                    <a class="nav-link active" id="overview-tab" data-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Mô tả</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" id="program-tab" data-toggle="tab" href="#program" role="tab" aria-controls="program" aria-selected="false">Lịch Trình</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review" aria-selected="false">Bình Luận</a>
                                 </li>
                                 <!-- <li class="nav-item">
                                    <a class="nav-link" id="map-tab" data-toggle="tab" href="#map" role="tab" aria-controls="map" aria-selected="false">Map</a>
                                 </li> -->
                              </ul>
                              <div class="tab-content" id="myTabContent">
                                       <!-- Mô tả -->
                                 <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                                    <div class="overview-content">
                                       <p><?=$tour_detail['description']?></p>
                                       <p></p>
                                       <ul>
                                         <li>- Bao gồm bữa sáng và bữa tối</li>
                                         <li>- Bao gồm chăm sóc sức khỏa</li>
                                         <li>- Đưa đón tại sân bay.</li>
                                         
                                       </ul>
                                    </div>
                                 </div>
                                 <!-- Lịch trình -->
                                 <div class="tab-pane" id="program" role="tabpanel" aria-labelledby="program-tab">
                                    <div class="itinerary-content">
                                       <h3>Program <span>( 4 days )</span></h3>
                                       <p>Dolores maiores dicta dolore. Natoque placeat libero sunt sagittis debitis? Egestas non non qui quos, semper aperiam lacinia eum nam! Pede beatae. Soluta, convallis irure accusamus voluptatum ornare saepe cupidatat.</p>
                                    </div>
                                    <div class="itinerary-timeline-wrap">
                                       <ul>
                                          <li>
                                             <div class="timeline-content">
                                                <div class="day-count">Day <span>1</span></div>
                                                <h4>Ancient Rome Visit</h4>
                                                <p>Nostra semper ultricies eu leo eros orci porta provident, fugit? Pariatur interdum assumenda, qui aliquip ipsa! Dictum natus potenti pretium.</p>
                                             </div>
                                          </li>
                                          <li>
                                             <div class="timeline-content">
                                                <div class="day-count">Day <span>2</span></div>
                                                <h4>Classic Rome Sightseeing</h4>
                                                <p>Nostra semper ultricies eu leo eros orci porta provident, fugit? Pariatur interdum assumenda, qui aliquip ipsa! Dictum natus potenti pretium.</p>
                                             </div>
                                          </li>
                                          <li>
                                             <div class="timeline-content">
                                                <div class="day-count">Day <span>3</span></div>
                                                <h4>Vatican City Visit</h4>
                                                <p>Nostra semper ultricies eu leo eros orci porta provident, fugit? Pariatur interdum assumenda, qui aliquip ipsa! Dictum natus potenti pretium.</p>
                                             </div>
                                          </li>
                                          <li>
                                             <div class="timeline-content">
                                                <div class="day-count">Day <span>4</span></div>
                                                <h4>Italian Food Tour</h4>
                                                <p>Nostra semper ultricies eu leo eros orci porta provident, fugit? Pariatur interdum assumenda, qui aliquip ipsa! Dictum natus potenti pretium.</p>
                                             </div>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                                 <!-- Bình luận -->
                                 <div class="tab-pane" id="review" role="tabpanel" aria-labelledby="review-tab">
                                    <!-- <div class="summary-review">
                                       <div class="review-score">
                                          <span>4.9</span>
                                       </div>
                                       <div class="review-score-content">
                                          <h3>
                                             Excellent
                                             <span>( Based on 24 reviews )</span>
                                          </h3>
                                          <p>Tincidunt iaculis pede mus lobortis hendrerit eveniet impedit aenean mauris qui, pharetra rem doloremque laboris euismod deserunt non, cupiditate, vestibulum.</p>
                                       </div>
                                    </div> -->
                                    <!-- review comment html -->
                                    <!-- <div class="comment-area">
                                       <h3 class="comment-title">3 Reviews</h3>
                                       <div class="comment-area-inner">
                                          <ol>
                                             <li>
                                                <figure class="comment-thumb">
                                                   <img src="assets/images/img20.jpg" alt="">
                                                </figure>
                                                <div class="comment-content">
                                                   <div class="comment-header">
                                                      <h5 class="author-name">Tom Sawyer</h5>
                                                      <span class="post-on">Jana 10 2020</span>
                                                      <div class="rating-wrap">
                                                         <div class="rating-start" title="Rated 5 out of 5">
                                                            <span style="width: 90%;"></span>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <p>Officia amet posuere voluptates, mollit montes eaque accusamus laboriosam quisque cupidatat dolor pariatur, pariatur auctor.</p>
                                                   <a href="#" class="reply"><i class="fas fa-reply"></i>Reply</a>
                                                </div>
                                             </li>
                                             <li>
                                                <ol>
                                                   <li>
                                                      <figure class="comment-thumb">
                                                         <img src="assets/images/img21.jpg" alt="">
                                                      </figure>
                                                      <div class="comment-content">
                                                         <div class="comment-header">
                                                            <h5 class="author-name">John Doe</h5>
                                                            <span class="post-on">Jana 10 2020</span>
                                                            <div class="rating-wrap">
                                                               <div class="rating-start" title="Rated 5 out of 5">
                                                                  <span style="width: 90%"></span>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <p>Officia amet posuere voluptates, mollit montes eaque accusamus laboriosam quisque cupidatat dolor pariatur, pariatur auctor.</p>
                                                         <a href="#" class="reply"><i class="fas fa-reply"></i>Reply</a>
                                                      </div>
                                                   </li>
                                                </ol>
                                             </li>
                                          </ol>
                                          <ol>
                                             <li>
                                                <figure class="comment-thumb">
                                                   <img src="assets/images/img22.jpg" alt="">
                                                </figure>
                                                <div class="comment-content">
                                                   <div class="comment-header">
                                                      <h5 class="author-name">Jaan Smith</h5>
                                                      <span class="post-on">Jana 10 2020</span>
                                                      <div class="rating-wrap">
                                                         <div class="rating-start" title="Rated 5 out of 5">
                                                            <span></span>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <p>Officia amet posuere voluptates, mollit montes eaque accusamus laboriosam quisque cupidatat dolor pariatur, pariatur auctor.</p>
                                                   <a href="#" class="reply"><i class="fas fa-reply"></i>Reply</a>
                                                </div>
                                             </li>
                                          </ol>
                                       </div>
                                       <div class="comment-form-wrap">
                                          <h3 class="comment-title">Leave a Review</h3>
                                          <form class="comment-form">
                                             <div class="full-width rate-wrap">
                                                <label>Your rating</label>
                                                <div class="procduct-rate">
                                                   <span></span>
                                                </div>
                                             </div>
                                             <p>
                                                <input type="text" name="name" placeholder="Name">
                                             </p>
                                             <p>
                                                <input type="text" name="name" placeholder="Last name">
                                             </p>
                                             <p>
                                                <input type="email" name="email" placeholder="Email">
                                             </p>
                                             <p>
                                                <input type="text" name="subject" placeholder="Subject">
                                             </p>
                                             <p>
                                                <textarea rows="6" placeholder="Your review"></textarea>
                                             </p>
                                             <p>
                                                <input type="submit" name="submit" value="Submit">
                                             </p>
                                          </form>
                                       </div>
                                    </div> -->
                                 </div>
                                 <!-- map -->
                                 <div class="tab-pane" id="map" role="tabpanel" aria-labelledby="map-tab">
                                    <div class="map-area">
                                       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60998820.06503915!2d95.3386452160086!3d-21.069765827214972!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2b2bfd076787c5df%3A0x538267a1955b1352!2sAustralia!5e0!3m2!1sen!2snp!4v1579777829477!5m2!1sen!2snp" height="450" allowfullscreen=""></iframe>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="single-tour-gallery">
                              <h3>Một số hình ảnh</h3>
                              <div class="single-tour-slider">
                                 <div class="single-tour-item">
                                    <figure class="feature-image">
                                       <img src="assets/images/img28.jpg" alt="">
                                    </figure>
                                 </div>
                                 
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4">
                        <div class="sidebar">
                           <div class="package-price">
                              <h5 class="price">
                                 <span>
                                    <?php 
                                       if($tour_detail['discount']==0){
                                          echo number_format($tour_detail['price'],0,"." ,"," );
                                       }else{
                                          $price = $tour_detail['price']*(1-$tour_detail['discount']/100);
                                          echo number_format($price,0,"." ,"," );
                                       }
                                    ?>
                                 </span> / Người
                              </h5>
                              <!-- <div class="start-wrap">
                                 <div class="rating-start" title="Rated 5 out of 5">
                                    <span style="width: 60%"></span>
                                 </div>
                              </div> -->
                           </div>
                           <div class="widget-bg booking-form-wrap">
                              <h4 class="bg-title">Đặt tour</h4>
                              <form class="booking-form" method="post">
                                 <div class="row">
                                    <div class="col-sm-12">
                                       <div class="form-group">
                                          <input name="name" type="text" placeholder="Họ và tên">
                                       </div>
                                    </div>
                                    <div class="col-sm-12">
                                       <div class="form-group">
                                          <input name="email" type="text" placeholder="Email">
                                       </div>
                                    </div>
                                    <div class="col-sm-12">
                                       <div class="form-group">
                                          <input name="phone" type="text" placeholder="Số điện thoại">
                                       </div>
                                    </div>
                                    <div class="col-sm-12">
                                       <div class="form-group">
                                          <input name="cmnd" type="text" placeholder="CMND / CCCD">
                                       </div>
                                    </div>
                                    <div class="col-sm-12">
                                       <div class="form-group">
                                          <input name="people" type="text" placeholder="Số người">
                                       </div>
                                    </div>
                                    <div class="col-sm-12">
                                       <div class="form-group">
                                          
                                          <input type="date" name="start_day" id="" >
                                       </div>
                                    </div>
                                    
                                    <div class="col-sm-12">
                                       <div class="form-group submit-btn">
                                          <input type="submit" name="submit" value="Đặt ngay">
                                       </div>
                                    </div>
                                 </div>
                              </form>
                           </div>
                           <div class="widget-bg information-content text-center">
                              <h5>LỜI KHUYÊN KHI ĐI DU LỊCH</h5>
                              <h3>MẸO VÀ THÔNG TIN LIÊN QUAN ĐẾN DU LỊCH</h3>
                              
                              <a href="#" class="button-primary">LIÊN HỆ</a>
                           </div>
                           <div class="travel-package-content text-center" style="background-image: url(assets/images/img11.jpg);">
                              <h5>CÁC GÓI KHÁC</h5>
                              <h3>CÁC GÓI DU LỊCH KHÁC</h3>
                              
                              <ul>
                                 <li>
                                    <a href="#"><i class="far fa-arrow-alt-circle-right"></i>Gói kỳ nghỉ</a>
                                 </li>
                                 <li>
                                    <a href="#"><i class="far fa-arrow-alt-circle-right"></i>Gói trăng mật</a>
                                 </li>
                                 <li>
                                    <a href="#"><i class="far fa-arrow-alt-circle-right"></i>Gói năm mới</a>
                                 </li>
                                 <li>
                                    <a href="#"><i class="far fa-arrow-alt-circle-right"></i>Gói cuối tuần</a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- subscribe section html start -->
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
                        
                     </div>
                  </div>
               </div>
            </div>
         </section>
            <!-- subscribe html end -->
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