<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>About Us | Eta Carinae Inc</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicon -->
  <link href="logo.png" rel="icon">

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;500&display=swap"
    rel="stylesheet">

  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Libraries Stylesheet -->
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Customized Bootstrap Stylesheet -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Template Stylesheet -->
  <link href="css/style.css" rel="stylesheet">
</head>

<body>
  <!-- Spinner Start -->
  <div id="spinner"
    class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
  </div>
  <!-- Spinner End -->

  <!-- Navbar Start -->
  <div id="header">
    <?php include "./navbar.php"; ?>
  </div>
  <!-- Navbar End -->


  <!-- Page Header Start -->
  <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
      <h1 class="display-3 mb-4 animated slideInDown">About Us</h1>
      <nav aria-label="breadcrumb animated slideInDown">
        <ol class="breadcrumb mb-0">
          <li class="breadcrumb-item"><a href=".">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">About Us</li>
        </ol>
      </nav>
    </div>
  </div>
  <!-- Page Header End -->


   <!-- About Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="row g-4 align-items-end mb-4">
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
          <img class="img-fluid rounded" src="img/about.jpg">
        </div>
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
          <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">About Us</p>
          <h1 class="display-5 mb-4">We Give Opportunities To People In Need</h1>
          <p class="mb-4">Not everyone is treated the same way, and the people in need are not able to show their
            strengths properly. From education to food, we believe every human being is deserving of help.
          </p>
          <div class="border rounded p-4">
            <nav>
              <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                <button class="nav-link fw-semi-bold active" id="nav-story-tab" data-bs-toggle="tab"
                  data-bs-target="#nav-story" type="button" role="tab" aria-controls="nav-story"
                  aria-selected="true">Story</button>
                <button class="nav-link fw-semi-bold" id="nav-mission-tab" data-bs-toggle="tab"
                  data-bs-target="#nav-mission" type="button" role="tab" aria-controls="nav-mission"
                  aria-selected="false">Mission</button>
                <button class="nav-link fw-semi-bold" id="nav-vision-tab" data-bs-toggle="tab"
                  data-bs-target="#nav-vision" type="button" role="tab" aria-controls="nav-vision"
                  aria-selected="false">Vision</button>
              </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
              <div class="tab-pane fade show active" id="nav-story" role="tabpanel" aria-labelledby="nav-story-tab">
                <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam
                  amet diam et eos labore.</p>
                <p class="mb-0">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.
                  Clita erat ipsum et lorem et sit</p>
              </div>
              <div class="tab-pane fade" id="nav-mission" role="tabpanel" aria-labelledby="nav-mission-tab">
                <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam
                  amet diam et eos labore.</p>
                <p class="mb-0">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.
                  Clita erat ipsum et lorem et sit</p>
              </div>
              <div class="tab-pane fade" id="nav-vision" role="tabpanel" aria-labelledby="nav-vision-tab">
                <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam
                  amet diam et eos labore.</p>
                <p class="mb-0">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.
                  Clita erat ipsum et lorem et sit</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
          <h1 class="display-5 mb-5">Our Core Values</h1>
          <p class="mb-4">Our Core Values are the three steps we always take to succeed in any project. They are from the three pillars of Eta Carinae Inc, E, T, and A.</p>
        </div>
      </div>
      <div class="border rounded p-4 wow fadeInUp" data-wow-delay="0.1s">
        <div class="row g-4">
          <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
            <div class="h-100">
              <div class="d-flex">
                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                  <i class="fa fa-times text-white"></i>
                </div>
                <div class="ps-3">
                  <h4>Empathize</h4>
                  <span>Clita erat ipsum lorem sit sed stet duo justo</span>
                </div>
                <div class="border-end d-none d-lg-block"></div>
              </div>
              <div class="border-bottom mt-4 d-block d-lg-none"></div>
            </div>
          </div>
          <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
            <div class="h-100">
              <div class="d-flex">
                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                  <i class="fa fa-users text-white"></i>
                </div>
                <div class="ps-3">
                  <h4>Teamwork</h4>
                  <span>Clita erat ipsum lorem sit sed stet duo justo</span>
                </div>
                <div class="border-end d-none d-lg-block"></div>
              </div>
              <div class="border-bottom mt-4 d-block d-lg-none"></div>
            </div>
          </div>
          <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
            <div class="h-100">
              <div class="d-flex">
                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                  <i class="fa fa-phone text-white"></i>
                </div>
                <div class="ps-3">
                  <h4>Accomplish</h4>
                  <span>Clita erat ipsum lorem sit sed stet duo justo</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- About End -->
  
<!-- Footer Start -->
<div id="footer">
    <?php include "./footer.php"; ?>
  </div>
  <!-- Footer End -->


  <!-- Back to Top -->
  <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>

  <!-- Template Javascript -->
  <script src="js/main.js"></script>
</body>

</html>