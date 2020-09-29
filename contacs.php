<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="description" content="Axima - Factory and Manufacturing Html Template">
  <link href="assets/images/logo/jk-ind-logo.png" rel="icon">
  <title>Axima - Factory and Manufacturing Html Template</title>
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Heebo:400,500,700%7cRajdhani:400,500,600,700&display=swap">
  <link rel="stylesheet" href="assets/css/libraries.css">
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
  <div class="wrapper">
   <!-- header -->
   <?php include "./includes/header.php"; ?>
    <!-- ========================= 
            Google Map
    =========================  -->
    <section id="googleMap" class="google-map p-0">
      <div id="map" style="height: 440px;"></div>
      <script src="assets/js/google-map.js"></script>
      <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY" async defer></script>
      <!-- CLICK HERE (https://developers.google.com/maps/documentation/embed/get-api-key) TO  LERAN MORE ABOUT GOOGLE MAPS API KEY -->
    </section><!-- /.GoogleMap -->

    <!-- ==========================
        contact 
    =========================== -->
    <section id="contact" class="contact pt-120 pb-110">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-8">
            <form class="contact__form-panel mb-40">
              <div class="row">
                <div class="col-sm-12 contact__form-panel-header">
                  <h4>Get In Touch</h4>
                  <p>Complete control over products allows us to ensure our customers receive the best quality prices
                    and service. Your email address will not be published.</p>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6">
                  <div class="form-group"><input type="text" class="form-control" placeholder="Name"></div>
                </div><!-- /.col-lg-6 -->
                <div class="col-sm-6 col-md-6 col-lg-6">
                  <div class="form-group"><input type="email" class="form-control" placeholder="Email"></div>
                </div><!-- /.col-lg-6 -->
                <div class="col-sm-6 col-md-6 col-lg-6">
                  <div class="form-group"><input type="text" class="form-control" placeholder="Phone"></div>
                </div><!-- /.col-lg-6 -->
                <div class="col-sm-6 col-md-6 col-lg-6">
                  <div class="form-group"><input type="text" class="form-control" placeholder="Website"></div>
                </div><!-- /.col-lg-6 -->
                <div class="col-sm-12 col-md-12 col-lg-12">
                  <div class="form-group">
                    <textarea class="form-control" placeholder="Request"></textarea>
                  </div>
                </div><!-- /.col-lg-12 -->
                <div class="col-sm-12 col-md-12 col-lg-12">
                  <button type="submit" class="btn btn__primary">Submit Request</button>
                </div><!-- /.col-lg-12 -->
              </div><!-- /.row -->
            </form>
          </div><!-- /.col-lg-8 -->
          <div class="col-sm-10 col-md-6 col-lg-4">
            <div class="contact-panel mb-40">
              <h6 class="contact__panel-title">Contact Details</h6>
              <ul class="contact__panel-list list-unstyled">
                <li><i class="fa fa-map-marker"></i><span>Brooklyn, New York 11226 United States.</span></li>
                <li><i class="fa fa-envelope"></i><span>Email: Industic@7oroof.com</span></li>
                <li><i class="fa fa-phone"></i><span>002 010123456789</span></li>
              </ul>
            </div>
            <div class="contact-panel mb-40">
              <h6 class="contact__panel-title">Opening Hours</h6>
              <ul class="contact__panel-list contact__panel-list-2 list-unstyled">
                <li><span>Monday-Friday</span><span>10:00 - 18:00</span></li>
                <li><span>Saturday</span><span>10:00 - 14:00</span></li>
                <li><span>Sunday</span><span>Closed</span></li>
              </ul>
            </div>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.contact  -->

    <!-- ========================
      Footer
    ========================== -->
    <!-- footer -->
    <?php include "./includes/footer.php"; ?>
    <button id="scrollTopBtn"><i class="fa fa-long-arrow-up"></i></button>
  </div><!-- /.wrapper -->

  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <script src="assets/js/plugins.js"></script>
  <script src="assets/js/main.js"></script>
</body>

</html>