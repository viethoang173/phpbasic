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

    <title>Contact Us</title>
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
                  <button class="btn mx-3 border-0" type="button" onclick="window.location.href='sign-in.html'">Sign in</button>
                  <button class="btn sign text-white" onclick="window.location.href='sign-up.html'" type="button">
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

    <div id="contact">
        <section class="map-content">
            <div id="map" class="mt-4">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.489397200803!2d105.76031421547913!3d20.973010695053713!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313453edc6904cf9%3A0xef22b602813dd07b!2sMetaway%20Holdings%20Join%20Stocks%20Company!5e0!3m2!1sen!2s!4v1659078546089!5m2!1sen!2s" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>
        <section class="section border-bottom pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-6 col-md-6 text-center border-end">
                        <h5 class="text-uppercase mb-2 fw-bold">Message Us</h5>
                        <!-- /.End of heading -->
                        <div class="mb-5 mb-md-0">
                            <a href="#!" class="h5 fw-bold text-black-50">Start a chat!</a>
                        </div>
                        <!-- /.End of link -->
                    </div>
                    <div class="col-6 col-md-6 text-center">
                        <h5 class="text-uppercase mb-2 fw-bold">Email</h5>

                        <!-- /.End of heading -->
                        <a href="#!" class="h5 fw-bold text-black-50">
                            info@demo.com </a>
                        <!-- /.End of link -->
                    </div>
                </div>
            </div>
        </section>
        <section class="contact-info bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <div class="section-title text-center mb-5">
                            <h3 class="block-title mb-2 fw-bold">Let us hear from you directly! </h2>
                            <p class="sub-title mt-3 fw-bold text-black-50">
                                Our guests always travel the world in style. Mention @Kempinski on Instagram for a
                                chance to be featured! </p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-12 col-lg-8">
                        <div class="row align-items-center">
                            <div class="col-md-6 mb-5 mb-md-0">
                                <div class="contact-info">
                                    <div class="mb-4">
                                        <h5 class="info-title link-title mb-3 fw-bold position-relative">
                                            Address</h5>
                                        <address class="mb-4 fw-bold text-black-50 ">
                                            Lô CX01, Khu đô thị Văn Khê, Phường La Khê, Quận Hà Đông, Hà Nội, Việt Nam </address>
                                    </div>
                                    <!-- /.End of address -->
                                    <div class="mb-4">
                                        <h5 class="info-title link-title mb-3 fw-bold position-relative">
                                            Phone &amp; WhatsApp Number</h5>
                                            <p class="fw-bold text-black-50">
                                                0892 555 983445
                                            </p>
                                    </div>
                                    <!-- /.End of phone -->
                                    <div class="mb-4">
                                        <h5 class="info-title link-title mb-3 fw-bold position-relative">
                                            Email</h5>
                                            <p class="fw-bold text-black-50">
                                                info@demo.com
                                            </p>
                                    </div>
                                    <!-- /.End of email -->
                                </div>
                            </div>
                            <div class="col-md-6">
                                <form action="" method="post"
                                    accept-charset="utf-8">
                                    <input type="hidden" name="csrf_test_name" value="">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="firstname" name="firstname"
                                            placeholder="Full name" required="">
                                    </div>

                                    <div class="form-group mt-3">
                                        <input type="email" class="form-control" id="email" name="email"
                                            placeholder="hello@domain.com" required="">
                                    </div>

                                    <div class="form-group mt-3">
                                        <input type="tel" class="form-control" id="phone" name="phone"
                                            placeholder="Telephone">
                                    </div>
                                    <div class="form-group mt-3">
                                        <textarea class="form-control" id="comments" rows="5" name="comments"
                                            placeholder="Tell us what we can help you with!"></textarea>
                                    </div>
                                    
                                    <!-- Submit -->
                                    <button type="submit" class="btn mt-3 send-mess">Send message</button>
                                </form>
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
      </footer>
      <div class="text-center sub-footer bg-dark text-white">
        Copyright 2022
      </div>

</body>

</html>