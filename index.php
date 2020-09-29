<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="description" content="JK Industry - Factory and Manufacturing Html Template">
  <link href="assets/images/logo/jk-ind-logo.png" rel="icon">
  <title>JK Industry - Factory and Manufacturing Html Template</title>
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Heebo:400,500,700%7cRajdhani:400,500,600,700&display=swap">
  <link rel="stylesheet" href="assets/css/libraries.css">
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<?php
    include("./api/helper/db.php");
    include("./api/products/Products.php");
    $product = new Products($conn);
    $allActiveItemList = $product->getActiveItemList($conn);
    $allActiveMaterialGroup = $product->getActiveMaterialGroup($conn);
?>


<body>
  <div class="wrapper">
    <!-- header -->
     <?php include "./includes/header.php"; ?>
    <!-- ============================
        Slider
    ============================== -->
    <section id="slider1" class="slider slider-1">
      <div class="carousel owl-carousel carousel-arrows carousel-dots" data-slide="1" data-slide-md="1"
        data-slide-sm="1" data-autoplay="false" data-nav="true" data-dots="true" data-space="0" data-loop="true"
        data-speed="3000" data-transition="fade" data-animate-out="fadeOut" data-animate-in="fadeIn">
        <div class="slide-item align-v-h bg-overlay bg-overlay-3">
          <div class="bg-img"><img src="assets/images/sliders/1.jpg" alt="slide img"></div>
          <div class="container">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12 col-xl-8">
                <div class="slide__content">
                  <span class="slide__subtitle">Positive Results From A Fast Growing Industrial & Manufacturing
                    Estates.</span>
                  <h2 class="slide__title">Industrial Solutions With Best Machinery!</h2>
                  <p class="slide__desc">We produce positive results from ever-growing Industrial & manufacturing
                    estates, we have established a corporate mandate to maintain strong core values.</p>
                  <a href="#" class="btn btn__primary mr-30">More About Us</a>
                  <a href="#" class="btn btn__white">Our Services</a>
                </div><!-- /.slide-content -->
              </div><!-- /.col-xl-8 -->
            </div><!-- /.row -->
          </div><!-- /.container -->
        </div><!-- /.slide-item -->
        <div class="slide-item align-v-h bg-overlay bg-overlay-3">
          <div class="bg-img"><img src="assets/images/sliders/2.jpg" alt="slide img"></div>
          <div class="container">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12 col-xl-8">
                <div class="slide__content">
                  <span class="slide__subtitle">A Grade Commercial & Industrial portfolio!</span>
                  <h2 class="slide__title">Serve As Consultants For All Industris</h2>
                  <p class="slide__desc">To further develop our corporate strengths we have established a corporate
                    mandate to maintain strong core values.</p>
                  <a href="#" class="btn btn__white mr-30">Our Services</a>
                  <a href="#" class="btn btn__primary btn__hover2">More About Us</a>
                </div><!-- /.slide-content -->
              </div><!-- /.col-xl-8 -->

            </div><!-- /.row -->
          </div><!-- /.container -->
        </div><!-- /.slide-item -->
        <div class="slide-item align-v-h bg-overlay bg-overlay-3">
          <div class="bg-img"><img src="assets/images/sliders/4.jpg" alt="slide img"></div>
          <div class="container">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12 col-xl-8">
                <div class="slide__content">
                  <span class="slide__subtitle">A Grade Commercial & Industrial portfolio!</span>
                  <h2 class="slide__title">Manufacture A High Quality Products</h2>
                  <p class="slide__desc">Develop our corporate strengths we have established a corporate mandate to
                    maintain strong core values that truly reflect the philosophy.</p>
                  <a href="#" class="btn btn__primary btn__hover2 mr-30">More About Us</a>
                  <a href="#" class="btn btn__white">Our Services</a>
                </div><!-- /.slide-content -->
              </div><!-- /.col-xl-8 -->
            </div><!-- /.row -->
          </div><!-- /.container -->
        </div><!-- /.slide-item -->
      </div><!-- /.carousel -->
    </section><!-- /.slider -->


     <!-- ========================
        Services Carousel
    =========================== -->
    <section id="servicesCarousel" class="services services-layout1 services-carousel pt-0 mt-120">
      <div class="bg-img"><img src="assets/images/backgrounds/pattern/2.png" alt="background"></div>
      <div class="container">
         <h3>Products</h3>
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="carousel owl-carousel carousel-dots" data-slide="3" data-slide-md="2" data-slide-sm="1"
              data-autoplay="true" data-nav="false" data-dots="true" data-space="30" data-loop="true" data-speed="800">


              <?php
                 foreach($allActiveItemList as $item){
                      ?>
                         <div class="service-item">
                            <div class="service__img">
                              <img src="assets/images/services/1.jpg" alt="service" class="img-fluid">
                            </div><!-- /.service-img -->
                            <div class="service__content">
                              <h4 class="service__title"><?php echo $item["ITEM_NAME"]; ?></h4>
                              <p class="service__desc">Petroleum and natural gas are nonrenewable sources of energy, a liquid found
                                underground that can be used to make gasoline.</p>
                              <a href="#" class="btn btn__secondary btn__link">
                                <i class="icon-arrow-right arrow-rounded"></i>
                                <span><?php echo $item["MATERIAL_GROUP_NAME"]; ?></span>
                              </a>
                            </div><!-- /.service-content -->
                          </div><!-- /.service-item -->
                      <?php
                 }
              ?>
              
            </div><!-- /.carousel -->
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Services Carousel -->

    

    <!-- ========================
      About Layout 2
    =========================== -->
    <section id="aboutLayout2" class="about about-layout2 pt-120 pb-40">
      <div class="container">
        <div class="row">
        </div><!-- /.row -->
        <div class="row">
          <div class="col-md-4 col-sm-12">
            <div class="counter-item">
              <h4 class="counter">6,154</h4>
              <p class="counter__desc">portfolio Completed In The Last 5 Years</p>
            </div><!-- /.counter-item -->
          </div>

          <div class="col-md-4 col-sm-12">
            <div class="counter-item">
              <h4 class="counter">2,194</h4>
              <p class="counter__desc">Happy Customers Who Trusted Us</p>
            </div><!-- /.counter-item -->
          </div>

          <div class="col-md-4 col-sm-12">
            <div class="counter-item">
              <h4 class="counter">2,194</h4>
              <p class="counter__desc">Happy Customers Who Trusted Us</p>
            </div><!-- /.counter-item -->
          </div>


        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.About Layout 2 -->

    <!-- =====================
         Clients 
      ======================== -->
    <section id="clients" class="clients border-top">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="carousel owl-carousel" data-slide="6" data-slide-md="4" data-slide-sm="2" data-autoplay="true"
              data-nav="false" data-dots="false" data-space="20" data-loop="true" data-speed="700">
              <div class="client">
                <a href="#"><img src="assets/images/clients/9.png" alt="client"></a>
              </div><!-- /.client -->
              <div class="client">
                <a href="#"><img src="assets/images/clients/10.png" alt="client"></a>
              </div><!-- /.client -->
              <div class="client">
                <a href="#"><img src="assets/images/clients/11.png" alt="client"></a>
              </div><!-- /.client -->
              <div class="client">
                <a href="#"><img src="assets/images/clients/12.png" alt="client"></a>
              </div><!-- /.client -->
              <div class="client">
                <a href="#"><img src="assets/images/clients/13.png" alt="client"></a>
              </div><!-- /.client -->
              <div class="client">
                <a href="#"><img src="assets/images/clients/11.png" alt="client"></a>
              </div><!-- /.client -->
            </div><!-- /.carousel -->
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.clients  -->

   

    <!-- ========================
        Services Carousel
    =========================== -->
    <section id="servicesCarousel" class="services services-layout2 services-carousel pt-0 mt-120">
      <div class="bg-img"><img src="assets/images/backgrounds/pattern/2.png" alt="background"></div>
      <div class="container">
        <div class="row heading mb-40">
          <div class="col-sm-12 col-md-12 col-lg-6">
            <span class="heading__subtitle">Fast Growing Industrial & Manufacturing Estates.</span>
            <h2 class="heading__title">Provides High Performance Services For Multiple Industries And Technologies!</h2>
          </div><!-- /.col-lg-6 -->
          <div class="col-sm-12 col-md-12 col-lg-6">
            <p class="heading__desc">Yet those that embrace change are thriving, building bigger, better, faster, and
              stronger products than ever before. You are helping to lead the charge; we can help you build on your past
              successes and prepare for future.</p>
            <div class="d-flex">
              <a href="#" class="btn btn__primary mt-30 mr-30">Our Services</a>
              <div class="contact-chip mt-30">
                <div class="contact__chip-img">
                   <i class="fa fa-user-circle" style="font-size:53px"></i>
                </div><!-- /.contact__chip-ig -->
                <div class="contact__chip-info">
                  <h6>(+91) 7404299390</h6>
                  <span>Sales Representative</span>
                </div><!-- /.contact__chip-info -->
              </div><!-- /.contact-chip -->
            </div>
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="col-sm-12 col-md-12 col-lg-12">
          <div class="carousel owl-carousel carousel-dots" data-slide="3" data-slide-md="2" data-slide-sm="1"
            data-autoplay="true" data-nav="false" data-dots="true" data-space="30" data-loop="true" data-speed="800">
            <div class="service-item">
              <div class="service__content">
                <div class="service__icon">
                  <i class="icon-tank-2"></i>
                </div><!-- /.service__icon -->
                <h4 class="service__title">Petroleum & Gas <br> Energy</h4>
                <p class="service__desc">Petroleum and natural gas are nonrenewable sources of energy, a liquid found
                  underground that can be used.</p>
                <a href="#" class="btn btn__secondary btn__link">
                  <i class="icon-arrow-right arrow-rounded"></i>
                  <span>Read More</span>
                </a>
              </div><!-- /.service-content -->
            </div><!-- /.service-item -->
            <div class="service-item">
              <div class="service__content">
                <div class="service__icon">
                  <i class="icon-factory-2"></i>
                </div><!-- /.service__icon -->
                <h4 class="service__title">Construction & <br>Engineering</h4>
                <p class="service__desc">Professional discipline deals with designing, planning, construction and
                  infrastructures management such as roads, tunnels.</p>
                <a href="#" class="btn btn__secondary btn__link">
                  <i class="icon-arrow-right arrow-rounded"></i>
                  <span>Read More</span>
                </a>
              </div><!-- /.service-content -->
            </div><!-- /.service-item -->
            <div class="service-item">
              <div class="service__content">
                <div class="service__icon">
                  <i class="icon-gears-2"></i>
                </div><!-- /.service__icon -->
                <h4 class="service__title">Mechanical <br> Engineering</h4>
                <p class="service__desc">Materials science principles to design, analyze, manufacture, and maintain
                  mechanical systems. It is one of the oldest .</p>
                <a href="#" class="btn btn__secondary btn__link">
                  <i class="icon-arrow-right arrow-rounded"></i>
                  <span>Read More</span>
                </a>
              </div><!-- /.service-content -->
            </div><!-- /.service-item -->
            <div class="service-item">
              <div class="service__content">
                <div class="service__icon">
                  <i class="icon-factory-2"></i>
                </div><!-- /.service__icon -->
                <h4 class="service__title">Basic & Industrial <br> Chemicals</h4>
                <p class="service__desc">Produced in huge quantities and critical ingredients for products used by both
                  industry and the general consumer. </p>
                <a href="#" class="btn btn__secondary btn__link">
                  <i class="icon-arrow-right arrow-rounded"></i>
                  <span>Read More</span>
                </a>
              </div><!-- /.service-content -->
            </div><!-- /.service-item -->
            <div class="service-item">
              <div class="service__content">
                <div class="service__icon">
                  <i class="icon-robot"></i>
                </div><!-- /.service__icon -->
                <h4 class="service__title">Automotive <br> Manufacturing</h4>
                <p class="service__desc">The automotive industry comprises a wide range of companies involved in the
                  design, development, manufacturing, and selling.</p>
                <a href="#" class="btn btn__secondary btn__link">
                  <i class="icon-arrow-right arrow-rounded"></i>
                  <span>Read More</span>
                </a>
              </div><!-- /.service-content -->
            </div><!-- /.service-item -->
            <div class="service-item">
              <div class="service__content">
                <div class="service__icon">
                  <i class="icon-cart"></i>
                </div><!-- /.service__icon -->
                <h4 class="service__title">Bridge <br> Construction</h4>
                <p class="service__desc">Building a bridge is a complex undertaking requiring knowledge and expertise.
                  Several variables, including engineering.</p>
                <a href="#" class="btn btn__secondary btn__link">
                  <i class="icon-arrow-right arrow-rounded"></i>
                  <span>Read More</span>
                </a>
              </div><!-- /.service-content -->
            </div><!-- /.service-item -->
          </div><!-- /.carousel -->
        </div><!-- /.col-lg-12 -->
      </div><!-- /.row -->
  </div><!-- /.container -->
  </section><!-- /.Services Carousel -->

  <!-- =====================
       video Banner
    ======================== -->
  <section id="videoBanner" class="video-banner video-banner-layout2 bg-overlay">
    <div class="bg-img"><img src="assets/images/backgrounds/1.jpg" alt="background"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
          <div class="video__btn text-center">
            <a class="popup-video" href="https://www.youtube.com/watch?4=&v=TKnufs85hXk">
              <span class="video__player-animation"></span>
              <span class="video__player-animation video__player-animation-2"></span>
              <div class="video__player">
                <i class="fa fa-play"></i>
              </div>
            </a>
          </div><!-- /.video__btn -->
        </div><!-- /.col-lg-12 -->
      </div><!-- /.row -->
    </div><!-- /.container -->
  </section><!-- /.videoBanner -->

  <!-- =========================
           Banner 2
     =========================== -->
  <section id="banner2" class="banner banner-2 bg-overlay bg-overlay-theme-2 bg-parallax pt-120 pb-0">
    <div class="bg-img"><img src="assets/images/banners/3.jpg" alt="background"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-7">
          <form class="contact__form-panel mr-50">
            <div class="row">
              <div class="col-sm-12 contact__form-panel-header">
                <h4>Get In Touch</h4>
                <p>Complete control over products allows us to ensure our customers receive the best quality prices
                  and service.</p>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-6">
                <div class="form-group"><input type="text" class="form-control" placeholder="Name" required></div>
              </div><!-- /.col-lg-6 -->
              <div class="col-sm-6 col-md-6 col-lg-6">
                <div class="form-group"><input type="email" class="form-control" placeholder="Email" required></div>
              </div><!-- /.col-lg-6 -->
              <div class="col-sm-6 col-md-6 col-lg-6">
                <div class="form-group"><input type="text" class="form-control" placeholder="Phone" required></div>
              </div><!-- /.col-lg-6 -->
              <div class="col-sm-6 col-md-6 col-lg-6">
                <div class="form-group form-group-select">
                  <select class="form-control" required>
                    <option>Select Your Category</option>
                     <?php
                         foreach($allActiveMaterialGroup as $materialGroup){
                           ?>
                             <option><?php echo $materialGroup["MATERIAL_GROUP_NAME"]; ?> </option>
                           <?php 
                         }
                     ?>
                  </select>
                </div>
              </div>
              <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="form-group">
                  <textarea class="form-control" placeholder="Additional Details!"></textarea>
                </div>
              </div><!-- /.col-lg-12 -->
              <div class="col-sm-12 col-md-12 col-lg-12">
                <button type="submit" class="btn btn__primary btn__block">Submit Request</button>
              </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
          </form><!-- /.contact__form-panel -->
        </div><!-- /.col-lg-7 -->
        <div class="col-sm-12 col-md-12 col-lg-5">
          <div class="testimonials testimonials-white">
            <h6 class="testimonials__heading color-white">testimonials</h6>
            <div class="carousel owl-carousel carousel-arrows" data-slide="1" data-slide-md="1" data-slide-sm="1"
              data-autoplay="true" data-nav="true" data-dots="false" data-space="0" data-loop="true" data-speed="800">
              <!-- Testimonial #1 -->
              <div class=" testimonial-item">
                <div class="testimonial__content">
                  <p class="testimonial__desc">I’ve seen great companies serving industry solutions in my career. But
                    not to the point where you feel that comfort and trust that we get with Industic Company.</p>
                </div><!-- /.testimonial-content -->
                <div class="testimonial__meta">
                  <div class="testimonial__thumb">
                   <i class="fa fa-user-circle text-white" style="font-size:25px"></i>
                  </div><!-- /.testimonial-thumb -->
                  <h5 class="testimonial__meta-title">Martin Hope</h5>
                  <p class="testimonial__meta-desc">Pro Dust</p>
                </div><!-- /.testimonial-meta -->
              </div><!-- /. testimonial-item -->
              <!-- Testimonial #2 -->
              <div class=" testimonial-item">
                <div class="testimonial__content">
                  <p class="testimonial__desc">I’ve seen great companies serving industry solutions in my career. But
                    not to the point where you feel that comfort and trust that we get with Industic Company.</p>
                </div><!-- /.testimonial-content -->
                <div class="testimonial__meta">
                  <div class="testimonial__thumb">
                   <i class="fa fa-user-circle text-white" style="font-size:25px"></i>
                  </div><!-- /.testimonial-thumb -->
                  <h5 class="testimonial__meta-title">Martin Hope</h5>
                  <p class="testimonial__meta-desc">Pro Dust</p>
                </div><!-- /.testimonial-meta -->
              </div><!-- /. testimonial-item -->
            </div><!-- /.carousel -->
          </div><!-- /.testimonials -->
        </div><!-- /.col-lg-5 -->
      </div><!-- /.row -->
    </div><!-- /.container -->
  </section><!-- /. Banner 2 -->

  <!-- =========================
           contact Info
     =========================== -->
  <section id="contactInfo" class="contact-info pt-40 pb-20">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
          <strong class="text-center d-block mt-50 mb-20">We will get back to you within 24 hours.</strong>
        </div><!-- /.col-lg-7 -->
        <div class="col-sm-12 col-md-12 col-lg-12">
          <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-12 col-xl-4">
              <div class="contact__info-box">
                <div class="contact__info-box-icon">
                  <i class="icon-phone"></i>
                </div><!-- /.contact__info-box-icon -->
                <div class="contact__info-box-text">
                  <span>Call Us:</span>
                  <strong><a href="tel:07404299390">(+91) 74042-99390</a></strong>
                </div><!-- /.contact__info-box-text -->
              </div><!-- /.contact__info-box -->
            </div><!-- /.col-lg-6 -->

            <div class="col-sm-6 col-md-6 col-lg-12 col-xl-4">
              <div class="contact__info-box">
                <div class="contact__info-box-icon">
                  <i class="icon-phone"></i>
                </div><!-- /.contact__info-box-icon -->
                <div class="contact__info-box-text">
                  <span>Call Us:</span>
                  <strong><a href="tel:094169-35482">(+91) 94169-35482</a></strong>
                </div><!-- /.contact__info-box-text -->
              </div><!-- /.contact__info-box -->
            </div><!-- /.col-lg-6 -->


            <div class="col-sm-6 col-md-6 col-lg-12 col-xl-4">
              <div class="contact__info-box" >
                <div class="contact__info-box-icon">
                  <i class="icon-envelope"></i>
                </div><!-- /.contact__info-box-icon -->
                <div class="contact__info-box-text">
                  <span>Email Us:</span>
                  <strong><a href="mailto:jkindustries8282@gmail.com">jkindustries8282@gmail.com</a></strong>
                </div><!-- /.contact__info-box-text -->
              </div><!-- /.contact__info-box -->
            </div><!-- /.col-lg-6 -->
          </div><!-- /.row -->
        </div><!-- /.col-lg-5 -->
      </div><!-- /.row -->
    </div><!-- /.container -->
  </section><!-- /. contact Info -->

  <!-- footer -->
  <?php include "./includes/footer.php"; ?>
  <!-- ========================
      Footer
    ========================== -->
 
  <button id="scrollTopBtn"><i class="fa fa-long-arrow-up"></i></button>
  </div><!-- /.wrapper -->

  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <script src="assets/js/plugins.js"></script>
  <script src="assets/js/main.js"></script>
</body>

</html>