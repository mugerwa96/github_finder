<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GITHUB FINDER</title>
    <!-- links starts -->
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/mdb.min.css">
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="./webfonts/all.css">
    <!-- links ends -->
</head>
<body>

    <!-- navigation bar starts -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow fixed-top">
        <div class="col-md-3"></div>
        <div class="container">
          <a class="navbar-brand fw-bold" href="#"><i class="fab fa-github fa-2x mx-2"></i> GITHUB FINDER</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""><i class="fa fa-bars"></i></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link <?php if($page=="index.php")echo "active";?>" aria-current="page" href="index"><i class="fa fa-home mx-2"></i>Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link  <?php if($page=="about.php")echo "active";?>" aria-current="page" href="about"><i class="fa fa-list mx-2"></i>About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link  <?php if($page=="contact.php")echo "active";?>" aria-current="page" href="contact"><i class="fa fa-phone mx-2"></i>Contact Me</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " aria-current="page"  data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling" href="#"><i class="fa fa-user mx-2"></i>Developer</a>
              </li>
           


            </ul>
           
          </div>
        </div>
      </nav>
    <!-- navigation bar ends -->



    <!-- offcanvase developer starts -->

<div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title fw-bold" id="offcanvasScrollingLabel">GITHUB</h5>

    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div class="developer">
<div class="row">

    <div class="center">

        <div class="image border">
            <img src="./images/user_2.png" alt="">
        </div>
    </div>
    <span class="fw-bold "><i class="fas fa-user-circle  text-muted mx-1"></i>MUGERWA 96</span> <br>
                                <small ><i class="fas fa-star  text-muted mx-1"></i><span class="text-muted">23  Followers</span></small>
                                <small ><i class="fas fa-star text-muted mx-1"></i><span class="text-muted">13  Following</span></small> <br>
                                <small ><i class="fas fa-database text-muted mx-1"></i><span class="text-muted">Bio Data:
                                    <small ><i class="fas fa-location-pin mx-1 text-muted"></i><span class="text-muted">location:<span> kireka-Namugongo</span></span></small> <br>
                                    <small ><i class="fas fa-calendar-week mx-1 text-muted"></i><span class="text-muted">Created At:<span> 2020-9-8</span></span></small>
                                    <span>I dont regret being being in a family where they didnt give me everything that  i wanted coz it taught me how to hassle and get whatever i needed</span></span></small> <br>
    
</div>
    </div>
  </div>
</div>
<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasWithBackdrop" aria-labelledby="offcanvasWithBackdropLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasWithBackdropLabel">Offcanvas with backdrop</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <p>.....</p>
  </div>
</div>
<div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Backdrop with scrolling</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <p>Try scrolling the rest of the page to see this option in action.</p>
  </div>
</div>
<!-- offcanvase developer ends -->

