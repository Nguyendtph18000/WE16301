<!doctype html>
<html lang="en">
<head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <title>Travele | Các gói tour </title>

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
                        <h1 class="inner-title">Các gói tour</h1>
                     </div>
                  </div>
               </div>
               <div class="inner-shape"></div>
            </section>
            <!-- Inner Banner html end-->
            <!-- packages html start -->
            <div class="package-section">
               <div class="container">
                  <div class="package-inner">
                     <div class="row">
                        
                        <?php foreach($tours as $t):  ?>

                           <div class="col-lg-4 col-md-6">

                              <div class="package-wrap" style="box-shadow: 0px 0px 35px 0px rgba(0, 0, 0, 0.08);">
                                 <figure class="feature-image">
                                    <a href="<?=BASE_URL?>tour-detail&&id=<?=$t['id']?>">
                                       <img src="<?=PUBLIC_HOME_ASSETS?><?=$t['image']?>" alt="">
                                    </a>
                                 </figure>
                                 <div class="package-price">
                                    <h6>
                                       <span><?=$t['price']?> đ </span> / Người
                                    </h6>
                                 </div>
                                 <div class="package-content-wrap">
                                    <div class="package-meta text-center">
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
                                    </div>
                                    <div class="package-content">
                                       <h3>
                                          <a href="<?=BASE_URL?>tour-detail&&id=<?=$t['id']?>"><?=$t['title']?></a>
                                       </h3>
                                       <!-- <div class="review-area">
                                          <span class="review-text">(25 reviews)</span>
                                          <div class="rating-start" title="Rated 5 out of 5">
                                             <span style="width: 60%"></span>
                                          </div>
                                       </div> -->
                                       <p><?=$t['description']?></p>
                                       <div class="btn-wrap">
                                          <a href="#" class="button-text width-12">Đặt ngay<i class="fas fa-arrow-right"></i></a>
                                          <!-- <a href="#" class="button-text width-6">Wish List<i class="far fa-heart"></i></a> -->
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        <?php endforeach ?>

                        
                        
                     </div>
                  </div>
               </div>
            </div>
            <!-- packages html end -->
            <!-- Home activity section html start -->
            <section class="activity-section">
               <div class="container">
                  <div class="section-heading text-center">
                     <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                           <h5 class="dash-style">HOẠT ĐỘNG DU LỊCH</h5>
                           <h2>CUỘC PHIÊU LƯU & HOẠT ĐỘNG</h2>
                           <p>Mollit voluptatem perspiciatis convallis elementum corporis quo veritatis aliquid blandit, blandit torquent, odit placeat. Adipiscing repudiandae eius cursus? Nostrum magnis maxime curae placeat.</p>
                        </div>
                     </div>
                  </div>
                  <div class="activity-inner row">
                     <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="activity-item">
                           <div class="activity-icon">
                              <a href="#">
                                 <img src="<?=HOME_ASSESTS?>images/icon6.png" alt="">
                              </a>
                           </div>
                           <div class="activity-content">
                              <h4>
                                 <a href="#">Cuộc phiêu lưu</a>
                              </h4>
                              <p>15 Điểm đến</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="activity-item">
                           <div class="activity-icon">
                              <a href="#">
                                 <img src="<?=HOME_ASSESTS?>images/icon10.png" alt="">
                              </a>
                           </div>
                           <div class="activity-content">
                              <h4>
                                 <a href="#">Đi bọ đường dài</a>
                              </h4>
                              <p>12 Điểm đến</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="activity-item">
                           <div class="activity-icon">
                              <a href="#">
                                 <img src="<?=HOME_ASSESTS?>images/icon9.png" alt="">
                              </a>
                           </div>
                           <div class="activity-content">
                              <h4>
                                 <a href="#">Lửa trại</a>
                              </h4>
                              <p>7 Điểm đến</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="activity-item">
                           <div class="activity-icon">
                              <a href="#">
                                 <img src="<?=HOME_ASSESTS?>images/icon8.png" alt="">
                              </a>
                           </div>
                           <div class="activity-content">
                              <h4>
                                 <a href="#">Đường sắt</a>
                              </h4>
                              <p>15 Điểm đến</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="activity-item">
                           <div class="activity-icon">
                              <a href="#">
                                 <img src="<?=HOME_ASSESTS?>images/icon7.png" alt="">
                              </a>
                           </div>
                           <div class="activity-content">
                              <h4>
                                 <a href="#">Cắm trại</a>
                              </h4>
                              <p>13 Điểm đến</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="activity-item">
                           <div class="activity-icon">
                              <a href="#">
                                 <img src="<?=HOME_ASSESTS?>images/icon11.png" alt="">
                              </a>
                           </div>
                           <div class="activity-content">
                              <h4>
                                 <a href="#">Khám phá</a>
                              </h4>
                              <p>25 Điểm đến</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- activity html end -->
         </main>
         <?php include_once "./views/homepage/layouts/footer.php" ?>

         <!-- <a id="backTotop" href="#" class="to-top-icon">
            <i class="fas fa-chevron-up"></i>
         </a> -->
         
      </div>

      <!-- JavaScript -->
      <?php include_once "./views/homepage/layouts/js.php" ?>
   </body>

</html>