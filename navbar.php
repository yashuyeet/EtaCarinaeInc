<?php include 'settings.php'; ?>

<!-- Navbar Start -->
<div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
  <div class="top-bar row gx-0 align-items-center d-none d-lg-flex">
    <div class="col-lg-6 px-5 text-start">
      <small><i class="fa fa-map-marker-alt text-primary me-2"></i>California, USA</small>
      <!--<small class="ms-4"><i class="fa fa-clock text-primary me-2"></i>9.00 am - 9.00 pm</small>-->
    </div>
    <div class="col-lg-6 px-5 text-end">
      <small><i class="fa fa-envelope text-primary me-2"></i>contact.etacarinaeinc.org</small>
      <small class="ms-4"><i class="fa fa-phone-alt text-primary me-2"></i>484 467 1483</small>
    </div>
  </div>

  <nav class="navbar navbar-expand-lg navbar-light py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
    <a href="index.html" class="navbar-brand ms-4 ms-lg-0">
      <h1 class="display-5 text-primary m-0">Eta Carinae Inc</h1>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <div class="navbar-nav ms-auto p-4 p-lg-0">
        <a href="./" class="nav-item nav-link active">Home</a>
        <a href="about.php" class="nav-item nav-link">About Us</a>
        <a href="project.php" class="nav-item nav-link">Projects</a>
        <a href="members.php" class="nav-item nav-link">Members</a>
        <a href="support.php" class="nav-item nav-link">Support Us</a>
        <?php
        if (!$auth->isLoggedIn()) {
          ?>
        <a href="login.php" class="nav-item nav-link">Log In</a>
          <?php
        } else {
          ?>
          <a href="account.php" class="nav-item nav-link" style="position: relative">
            <span><?php echo $auth->getUsername(); ?></span>
            &nbsp;
            <div style="position: relative; width: 32px; height: 16px; display: inline-block">
            <img width="32" height="32" style="border-radius: 32px; position: absolute; top: -4px" src="<?php $stmt = $db->prepare("SELECT avatar_url FROM users WHERE id = ?"); $stmt->execute([$auth->getUserId()]); echo $stmt->fetch()['avatar_url']; ?>">
            </div>
            <div style="border: 1px solid #355EFC; border-radius: 16px; position: absolute; top: 15px; left: 5px; right: 5px; bottom: 10px"></div>
          </a>
          <?php
        }
        ?>
        
      </div>
    </div>
  </nav>
</div>
<!-- Navbar End -->