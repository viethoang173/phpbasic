<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- JavaScript Bundle with Popper Bootstrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
    crossorigin="anonymous"></script>
  <script
    src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

  <!-- Add icon library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Swiper JS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" />

  <!-- JS -->
  <script src="/javascript/main.js"></script>

  <!-- CSS only -->
  <link rel="stylesheet" href="style.css" />

  <title>Home</title>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-xl mb-4 fixed-top bg-white p-0" id="navbar">
      <div class="container wrap">
        <a class="navbar-brand p-0" href="index.html"><img src="/img/bird.png" alt="" /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
          data-bs-target="#offcanvasNavbarExample-expand-lg" aria-controls="offcanvasNavbarExample-expand-lg">
          <span class="navbar-toggler-icon" data-bs-target="#offcanvasNavbarExample-expand-lg"></span>
        </button>
        <div class="offcanvas offcanvas-start" data-bs-hideresize="true" tabindex="-1"
          id="offcanvasNavbarExample-expand-lg" aria-labelledby="offcanvasNavbarExample-expand-lg">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasLabel">
              <img src="/img/bird.png" alt="" />
            </h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <div class="d-flex order-2">
              <button class="btn mx-3 border-0" type="button" onclick="window.location.href='/sign-in'">Sign in</button>
              <button class="btn sign text-white" onclick="window.location.href='/sign-up'" type="button">
                Sign up
              </button>
            </div>
            <ul class="navbar-nav justify-content-center flex-grow-1 pe-3 order-1">
              <li class="nav-item">
                <a class="home-page position-relative nav-link mx-3 my-1" onclick="myFunction()"
                  href="home-page.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="booking position-relative nav-link mx-3 my-1" href="booking.html">Booking</a>
              </li>
              <li class="nav-item">
                <a class="gallery position-relative nav-link mx-3 my-1" href="gallery.html">Gallery</a>
              </li>
              <li class="nav-item">
                <a class="about position-relative nav-link mx-3 my-1" href="about.html">About</a>
              </li>
              <li class="nav-item">
                <a class="contact position-relative nav-link mx-3 my-1" href="contact.html">Contact</a>
              </li>
              <li class="nav-item">
                <a class="news position-relative nav-link mx-3 my-1" href="news.html">News</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <div id="home-page">
    <section class="banner position-relative">
      <div class="swiper mySwiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide position-relative">
            <p class="position-absolute text-white enjoy">
              Enjoy Your Vacation With Us
            </p>
            <p class="position-absolute text-white text-bttm position-relative">
              Get the best experience at hotel
            </p>
            <img class="wid" src="/img/beach.jpg" alt="" />
          </div>
          <div class="swiper-slide position-relative">
            <p class="position-absolute text-white  enjoy">
              Enjoy Your Vacation With Us
            </p>
            <p class="position-absolute text-white text-bttm">
              Get the best experience at hotel
            </p>
            <img class="wid" src="/img/beach.jpg" alt="" />
          </div>
          <div class="swiper-slide position-relative">
            <p class="position-absolute text-white enjoy">
              Enjoy Your Vacation With Us
            </p>
            <p class="position-absolute text-white text-bttm">
              Get the best experience at hotel
            </p>
            <img class="wid" src="/img/beach.jpg" alt="" />
          </div>
        </div>
      </div>
      <div class="container position-absolute booking-date">
        <form action="">
          <div class="row no-gutters bg-white out-line mt-5">
            <div class="col-12 col-sm-6 col-lg-3 py-3 border-end">
              <form>
                <label for="date" class="col-form-label check">Check In</label>
                <div class="input-group date" id="datepicker">
                  <input type="text" class="form-control" />
                  <span class="input-group-append">
                    <span class="input-group-text bg-white d-block">
                      <i class="fa fa-calendar"></i>
                    </span>
                  </span>
                </div>
              </form>
            </div>
            <div class="col-12 col-sm-6 col-lg-3 py-3 border-end">
              <form>
                <label for="date" class="col-form-label check">Check Out</label>
                <div class="input-group date" id="datepicker-out">
                  <input type="text" class="form-control" />
                  <span class="input-group-append">
                    <span class="input-group-text bg-white d-block">
                      <i class="fa fa-calendar"></i>
                    </span>
                  </span>
                </div>
              </form>
            </div>
            <div class="col-12 col-sm-6 col-lg-3 py-3 border-end">
              <div class="row align-content-center">
                <div class="col-lg-12 d-flex flex-row align-items-center justify-content-center">
                  <p class="m-0 pdd">Adults</p>
                  <div class="input-counter">
                    <span class="minus-btn text-white fw-700 fs-2">-</span>
                    <input type="text" value="1" />
                    <span class="plus-btn text-white fw-700 fs-2">+</span>
                  </div>
                </div>
                <div class="col-lg-12 d-flex flex-row align-items-center justify-content-center mt-1">
                  <p class="m-0 pe-2 pdd-child">Chidren</p>
                  <div class="input-counter">
                    <span class="minus-btn text-white fw-700 fs-2">-</span>
                    <input type="text" value="1" />
                    <span class="plus-btn text-white fw-700 fs-2">+</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3 py-3 final-col">
              <p class="text-center help">
                <a href="#">Need Help:</a>
                <br />
                <a href="#">0906060953</a>
              </p>
              <p class="text-center avail">
                <a href="#">Check Availability</a>
              </p>
            </div>
          </div>
        </form>
      </div>
    </section>

    <section class="save">
      <div class="container position-relative">
        <div class="row position-absolute save-banner">
          <div class="col-sm-6 col-md-3 mb-4 mb-md-0">
            <div class="card h-100">
              <img class="card-img-top mt-5" src="/img/piggy-bank.png" alt="Title" />
              <div class="card-body">
                <h5 class="card-title text-center mt-3">Save up to 10%</h5>
                <p class="card-text text-center mt-2">
                  Members get access to an exclusive discounts on mnhthng.com.
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 mb-4 mb-md-0">
            <div class="card h-100">
              <img class="card-img-top mt-5" src="/img/secure-shield.png" alt="Title" />
              <div class="card-body text-center">
                <h5 class="card-title mt-3">Best Rate Guarantee</h5>
                <p class="card-text mt-2">
                  Members get access to an exclusive discounts on mnhthng.com.
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 mb-4 mb-md-0">
            <div class="card h-100">
              <img class="card-img-top mt-5" src="/img/wifi.png" alt="Title" />
              <div class="card-body text-center">
                <h5 class="card-title mt-3">Free Wi-Fi</h5>
                <p class="card-text mt-2">
                  Members get access to an exclusive discounts on mnhthng.com.
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 mb-4 mb-md-0">
            <div class="card h-100">
              <img class="card-img-top mt-5" src="/img/moon.png" alt="Title" />
              <div class="card-body text-center">
                <h5 class="card-title mt-3">Enjoy Free Nights</h5>
                <p class="card-text mt-2">
                  Members get access to an exclusive discounts on mnhthng.com.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="comfort mt-5 bg-white">
      <div class="container pt-5">
        <div class="row">
          <div class="col-lg-6">
            <div class="d-flex justify-content-center">
              <img src="/img/a.jpg" class="comfort-img" alt="" />
            </div>
          </div>
          <div class="col-lg-6">
            <div class="border-left ps-3 text-align-justify">
              <h3><strong>Comfort</strong> are Perfectly Combined Here</h3>
              <p class="pt-3">
                This charming private 19th-century mansion, which originally
                belonged to the family, has been completely renovated with
                care &amp; passion while respecting the spirit of place. Divo
                Hotel surrounded herself by a team of French artisans to
                create a sophisticated place in a refined.
              </p>
            </div>
            <div class="d-flex justify-content-center mt-5">
              <a href="booking.html" class="btn border provide">We Provide</a>
            </div>
          </div>
        </div>
      </div>
      <div class="container mt-5 position-relative">
        <video autoplay muted loop class="w-100 h-100 my-video position-absolute">
          <source src="/img/vecteezy_color-gradient-moving-background-on-screen_7704241_666.mp4" type="video/mp4" />
        </video>
        <div class="container text-center text-white charm pt-4">
          <h3 class="mt-4">
            This charming private 19th century mansion, which originally
          </h3>
          <div class="mt-4 position-relative" style="z-index: 2;">
            <a href="sign-in.html" class="btn text-white mt-2 mb-5 left-btn">Sign In</a>
            <a href="sign-up.html" class="btn right-btn mt-2 mb-5 border-0">Join Us</a>
          </div>
        </div>
        <div class="area">
          <ul class="circles m-0 p-0">
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
          </ul>
      </div>
      </div>
    </section>

    <section class="offer">
      <div class="container text-center">
        <h3>This Week's <strong>Top Offers</strong></h3>
        <p class="mt-3 fw-bold text-black-50">
          A resort is a self-contained destination that can provide for all of
          your travel needs in one location.
        </p>
        <div class="row">
          <div class="col-lg-3 mt-4">
            <div class="card text-start">
              <img class="card-img-top" src="/img/offer-1.jpg" alt="Title" />
              <div class="card-body">
                <h6 class="card-title">
                  Lorem Ipsum since the 1500 Usd offer
                </h6>
                <p class="card-text">Body</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 mt-4">
            <div class="card text-start">
              <img class="card-img-top" src="/img/offer-2.jpg" alt="Title" />
              <div class="card-body">
                <h6 class="card-title">
                  Lorem Ipsum since the 1500 Usd offer
                </h6>
                <p class="card-text">Body</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 mt-4">
            <div class="card text-start">
              <img class="card-img-top" src="/img/offer-3.jpg" alt="Title" />
              <div class="card-body">
                <h6 class="card-title">
                  Lorem Ipsum since the 1500 Usd offer
                </h6>
                <p class="card-text">Body</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 mt-4">
            <div class="card text-start">
              <img class="card-img-top" src="/img/offer-4.jpg" alt="Title" />
              <div class="card-body">
                <h6 class="card-title">
                  Lorem Ipsum since the 1500 Usd offer
                </h6>
                <p class="card-text">Body</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 mt-4">
            <div class="card text-start">
              <img class="card-img-top" src="/img/offer-5.jpg" alt="Title" />
              <div class="card-body">
                <h6 class="card-title">
                  Lorem Ipsum since the 1500 Usd offer
                </h6>
                <p class="card-text">Body</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 mt-4">
            <div class="card text-start">
              <img class="card-img-top" src="/img/offer-6.jpg" alt="Title" />
              <div class="card-body">
                <h6 class="card-title">
                  Lorem Ipsum since the 1500 Usd offer
                </h6>
                <p class="card-text">Body</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 mt-4">
            <div class="card text-start">
              <img class="card-img-top" src="/img/offer-7.jpg" alt="Title" />
              <div class="card-body">
                <h6 class="card-title">
                  Lorem Ipsum since the 1500 Usd offer
                </h6>
                <p class="card-text">Body</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 mt-4">
            <div class="card text-start">
              <img class="card-img-top" src="/img/offer-8.jpg" alt="Title" />
              <div class="card-body">
                <h6 class="card-title">
                  Lorem Ipsum since the 1500 Usd offer
                </h6>
                <p class="card-text">Body</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="explore bg-white">
      <div class="container text-center">
        <h3><strong>Explore</strong> Destinations & Experiences</h3>
        <p class="mt-3 fw-bold text-black-50">
          The journey of a thousand miles begins with a single step.
        </p>
        <div class="swiper mySwiper-explore mt-5">
          <div class="swiper-wrapper">
            <div class="swiper-slide position-relative">
              <a href="#" class="w-100">
                <img src="/img/explore-1.jpg" class="expl" alt="">
              </a>
              <div class="w-100 h-100 expl-title position-absolute">
                <h5><a href="#" class="text-white">Sherborne Old Castle</a></h5>
                <p><a href="#" class=" text-white">Don’t call it a dream. <br> Call it a plan.</a></p>
                <p><a href="#" class="btn border text-white fw-bold">Travel articles</a></p>
              </div>
            </div>
            <div class="swiper-slide position-relative">
              <a href="#" class="w-100">
                <img src="/img/explore-2.jpg" class="expl" alt="">
              </a>
              <div class="w-100 h-100 expl-title position-absolute">
                <h5><a href="#" class="text-white">Sherborne Old Castle</a></h5>
                <p><a href="#" class=" text-white">Don’t call it a dream. <br> Call it a plan.</a></p>
                <p><a href="#" class="btn border text-white fw-bold">Travel articles</a></p>
              </div>
            </div>
            <div class="swiper-slide position-relative">
              <a href="#" class="w-100">
                <img src="/img/explore-3.jpg" class="expl" alt="">
              </a>
              <div class="w-100 h-100 expl-title position-absolute">
                <h5><a href="#" class="text-white">Sherborne Old Castle</a></h5>
                <p><a href="#" class=" text-white">Don’t call it a dream. <br> Call it a plan.</a></p>
                <p><a href="#" class="btn border text-white fw-bold">Travel articles</a></p>
              </div>
            </div>
            <div class="swiper-slide position-relative">
              <a href="#" class="w-100">
                <img src="/img/explore-4.jpg" class="expl" alt="">
              </a>
              <div class="w-100 h-100 expl-title position-absolute">
                <h5><a href="#" class="text-white">Sherborne Old Castle</a></h5>
                <p><a href="#" class=" text-white">Don’t call it a dream. <br> Call it a plan.</a></p>
                <p><a href="#" class="btn border text-white fw-bold">Travel articles</a></p>
              </div>
            </div>
            <div class="swiper-slide position-relative">
              <a href="#" class="w-100">
                <img src="/img/explore-1.jpg" class="expl" alt="">
              </a>
              <div class="w-100 h-100 expl-title position-absolute">
                <h5><a href="#" class="text-white">Sherborne Old Castle</a></h5>
                <p><a href="#" class=" text-white">Don’t call it a dream. <br> Call it a plan.</a></p>
                <p><a href="#" class="btn border text-white fw-bold">Travel articles</a></p>
              </div>
            </div>
            <div class="swiper-slide position-relative">
              <a href="#" class="w-100">
                <img src="/img/explore-2.jpg" class="expl" alt="">
              </a>
              <div class="w-100 h-100 expl-title position-absolute">
                <h5><a href="#" class="text-white">Sherborne Old Castle</a></h5>
                <p><a href="#" class=" text-white">Don’t call it a dream. <br> Call it a plan.</a></p>
                <p><a href="#" class="btn border text-white fw-bold">Travel articles</a></p>
              </div>
            </div>
            <div class="swiper-slide position-relative">
              <a href="#" class="w-100">
                <img src="/img/explore-3.jpg" class="expl" alt="">
              </a>
              <div class="w-100 h-100 expl-title position-absolute">
                <h5><a href="#" class="text-white">Sherborne Old Castle</a></h5>
                <p><a href="#" class=" text-white">Don’t call it a dream. <br> Call it a plan.</a></p>
                <p><a href="#" class="btn border text-white fw-bold">Travel articles</a></p>
              </div>
            </div>
            <div class="swiper-slide position-relative">
              <a href="#" class="w-100">
                <img src="/img/explore-4.jpg" class="expl" alt="">
              </a>
              <div class="w-100 h-100 expl-title position-absolute">
                <h5><a href="#" class="text-white">Sherborne Old Castle</a></h5>
                <p><a href="#" class=" text-white">Don’t call it a dream. <br> Call it a plan.</a></p>
                <p><a href="#" class="btn border text-white fw-bold">Travel articles</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <div class="py-5 bg-grad">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3">
                <div class="newslatter">
                    <h3 class="text-center text-white">Get updates &amp; exclusive offers</h3>
                    <p class="text-center text-white fw-bold my-3">Sign up to our newsletter to be the first to hear about<br
                            class="d-lg-block">new openings, offers and more.</p>
                    <div class="input-group">
                        <input type="text" name="youremail" id="youremail"
                            class="form-control border-0" placeholder="Enter email here..."
                            aria-label="Recipient's username" aria-describedby="button-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary rounded-0 border-0 rounded-end fw-bold" type="button" id="button-addon2"
                                onclick="subscribe-email()">Subscribe</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.End of newslatter -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-xl-3 mb-5">
          <div class="logo">
            <a href="#"><img src="/img/bird.png" alt=""></a>
          </div>
          <p class="fw-bold text-black-50">Lô CX01, Khu đô thị Văn Khê, Phường La Khê, Quận Hà Đông, Hà Nội, Việt Nam</p>
          <p class="fw-bold text-black-50">info@demo.com</p>
        </div>
        <div class="col-lg-7 col-xl-7 offset-xl-1">
          <div class="row">
            <div class="col-sm-6 col-md-4 col-lg-4 mb-3 mb-lg-0">
              <h5 class="fw-bold">Pages</h5>
              <ul class="footer-link list-unstyled menu mb-0">
                <li class="mb-2"><a href="#" class="link d-block fw-bold text-black-50">Home</a></li>
                <li class="mb-2"><a href="#" class="link d-block fw-bold text-black-50">About Us</a></li>
                <li class="mb-2"><a href="#" class="link d-block fw-bold text-black-50">Contact Us</a></li>
                <li class="mb-2"><a href="#" class="link d-block fw-bold text-black-50">My Profile</a></li>
                <li class="mb-2"><a href="#" class="link d-block fw-bold text-black-50">Gallery</a></li>
              </ul>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 mb-3 mb-lg-0">
              <h5 class="fw-bold">Social Links</h5>
              <ul class="footer-link list-unstyled menu mb-0">
                <li class="mb-2"><a href="#" class="link d-block fw-bold text-black-50">
                  <i class="fa fa-instagram" style="font-size:24px"></i> Instagram</a>
                </li>
                <li class="mb-2"><a href="#" class="link d-block fw-bold text-black-50">
                  <i class="fa fa-facebook-square" style="font-size:24px"></i> Facebook</a>
                </li>
                <li class="mb-2"><a href="#" class="link d-block fw-bold text-black-50">
                  <i class="fa fa-twitter-square" style="font-size:24px"></i> Twitter</a></li>
                <li class="mb-2"><a href="#" class="link d-block fw-bold text-black-50">
                  <i class="fa fa-linkedin-square" style="font-size:24px"></i> LinkedIn</a></li>
              </ul>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 mb-3 mb-lg-0">
              <h5 class="fw-bold">Company Policy</h5>
              <ul class="footer-link list-unstyled menu mb-0">
                <li class="mb-2"><a href="#" class="link d-block fw-bold text-black-50">Privacy</a></li>
                <li class="mb-2"><a href="#" class="link d-block fw-bold text-black-50">Terms & Conditions</a></li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>
    <div class="text-center sub-footer bg-dark text-white">
    Copyright 2022
  </div>
  </footer>


  <!-- Initialize Swiper/Datepicker -->
  <script type="text/javascript">
    // ==== date piker ====
    $(function () {
      $("#datepicker").datepicker();
    });

    $(function () {
      $("#datepicker-out").datepicker();
    });

    // ==== Swiper ====
    var swiper = new Swiper(".mySwiper", {
      loop: true,
      autoplay: {
        delay: 4000,
      },
    });

    // ==== Adult-Chidren ====
    $(".input-counter").each(function () {
      var spinner = jQuery(this),
        input = spinner.find('input[type="text"]'),
        btnUp = spinner.find(".plus-btn"),
        btnDown = spinner.find(".minus-btn"),
        min = input.attr("min"),
        max = input.attr("max");
      btnUp.on("click", function () {
        var oldValue = parseFloat(input.val());
        if (oldValue >= max) {
          var newVal = oldValue;
        } else {
          var newVal = oldValue + 1;
        }
        spinner.find("input").val(newVal);
        spinner.find("input").trigger("change");
      });
      btnDown.on("click", function () {
        var oldValue = parseFloat(input.val());
        if (oldValue <= min) {
          var newVal = oldValue;
        } else {
          var newVal = oldValue - 1;
        }
        spinner.find("input").val(newVal);
        spinner.find("input").trigger("change");
      });
    });


    // ==== explore ====
    var swiper = new Swiper(".mySwiper-explore", {
      autoplay: {
        delay: 3000,
      },
      slidesPerView: 1,
      spaceBetween: 10,
      loop: true,
      breakpoints: {
        "@0.00": {
          slidesPerView: 1,
          spaceBetween: 10,
        },
        "@0.75": {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        "@1.00": {
          slidesPerView: 3,
          spaceBetween: 40,
        },
        "@1.50": {
          slidesPerView: 4,
          spaceBetween: 50,
        },
      },
    });

  </script>
</body>

</html>
