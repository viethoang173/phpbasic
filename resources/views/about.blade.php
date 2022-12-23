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
    <script src="/javascript/numscroller.js"></script>

    <!-- CSS only -->
    <link rel="stylesheet" href="style.css" />

    <title>About Us</title>
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

    <div id="about">
        <section class="header-content">
            <div class="container pt-5 my-5">
                <div class="row  justify-content-center">
                    <div class="col-12 col-md-10 col-lg-8 text-center">
                        <h1 class="fw-bold">Small Team - <strong class="h1 fw-bold">Big Hearts</strong></h1>
                        <p class="fw-bold text-black-50 mt-3 mb-5">
                            Our focus is always on finding the best people to work with. Our bar is high, And you
                            look ready to take on the challenge. </p>
                    </div>
                </div>

                <div class="row mb-5">
                    <div class="col-lg-6">
                        <img src="/img/about-banner-6.jpg" class="img-fluid rounded shadow-lg mb-4" alt="...">
                        <div class="row mb-4 ">
                            <div class="col-5">
                                <img src="/img/about-banner-4.jpg" class="img-fluid rounded shadow-lg" alt="...">
                            </div>
                            <div class="col-7">
                                <img src="/img/about-banner-5.jpg" class="img-fluid rounded shadow-lg" alt="...">
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-6">
                        <div class="row mb-4 ">
                            <div class="col-5">
                                <img src="/img/about-banner-4.jpg" class="img-fluid rounded shadow-lg" alt="...">
                            </div>
                            <div class="col-7">
                                <img src="/img/about-banner-5.jpg" class="img-fluid rounded shadow-lg" alt="...">
                            </div>
                        </div>
                        <img src="/img/about-banner-6.jpg" class="img-fluid rounded shadow-lg" alt="...">
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-6 mb-3 col-lg-3 mb-lg-0">
                        <span
                            class="numscroller display-4 text-primary d-block text-center"
                            data-min="1" data-max="50000" data-delay="5" data-increment="500"
                            data-slno="1">50000</span>
                        <p class="text-center m-0 fw-bold text-black-50">Monthly Active Users </p>
                    </div>
                    <div class="col-6 mb-3 col-lg-3 mb-lg-0">
                        <span
                            class="numscroller display-4 text-primary d-block text-center"
                            data-min="1" data-max="130" data-delay="5" data-increment="10" data-slno="2">130</span>
                        <p class="text-center m-0 fw-bold text-black-50">Team Members</p>
                    </div>
                    <div class="col-6 mb-3 col-lg-3 mb-lg-0">
                        <span
                            class="numscroller display-4 text-primary d-block text-center"
                            data-min="1" data-max="1235" data-delay="5" data-increment="10" data-slno="3">1235</span>
                        <p class="text-center m-0 fw-bold text-black-50">User Projects Published</p>
                    </div>
                    <div class="col-6 mb-3 col-lg-3 mb-lg-0">
                        <span
                            class="numscroller display-4 text-primary d-block text-center"
                            data-min="1" data-max="4590" data-delay="3" data-increment="10" data-slno="4">4590</span>
                        <p class="text-center m-0 fw-bold text-black-50">Server Uptime</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-about bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <div class="section-title text-center mb-5 col-middle">
                            <h3 class="block-title fs-25 mb-2 font-weight-bold">
                                <strong class="">Trusted</strong> by thousands of companies
                            </h3>
                            <div class="sub-title fw-bold my-3 text-black-50">
                                Our guests always travel the world in style. Mention @Kempinski on Instagram for a
                                chance to be featured! </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-4 col-md-2 mb-5">
                        <img class="clients"
                            src="https://hotel.bdtask.com/xainhotelv2/assets/img/banner/2021-11-18/i.jpg"
                            alt="Image Description">
                    </div>
                    <div class="col-4 col-md-2 mb-5">
                        <img class="clients"
                            src="https://hotel.bdtask.com/xainhotelv2/assets/img/banner/2021-01-11/a1.svg"
                            alt="Image Description">
                    </div>
                    <div class="col-4 col-md-2 mb-5">
                        <img class="clients"
                            src="https://hotel.bdtask.com/xainhotelv2/assets/img/banner/2021-01-11/f.svg"
                            alt="Image Description">
                    </div>
                    <div class="col-4 col-md-2 mb-5">
                        <img class="clients"
                            src="https://hotel.bdtask.com/xainhotelv2/assets/img/banner/2021-01-11/g.svg"
                            alt="Image Description">
                    </div>
                    <div class="col-4 col-md-2 mb-5">
                        <img class="clients"
                            src="https://hotel.bdtask.com/xainhotelv2/assets/img/banner/2021-01-11/p.svg"
                            alt="Image Description">
                    </div>
                    <div class="col-4 col-md-2 mb-5">
                        <img class="clients"
                            src="https://hotel.bdtask.com/xainhotelv2/assets/img/banner/2021-01-11/s.svg"
                            alt="Image Description">
                    </div>
                    <div class="col-4 col-md-2 mb-5">
                        <img class="clients"
                            src="https://hotel.bdtask.com/xainhotelv2/assets/img/banner/2021-01-11/s1.svg"
                            alt="Image Description">
                    </div>
                    <div class="col-4 col-md-2 mb-5">
                        <img class="clients"
                            src="https://hotel.bdtask.com/xainhotelv2/assets/img/banner/2021-01-11/s2.svg"
                            alt="Image Description">
                    </div>
                    <div class="col-4 col-md-2 mb-5">
                        <img class="clients"
                            src="https://hotel.bdtask.com/xainhotelv2/assets/img/banner/2021-01-11/s3.svg"
                            alt="Image Description">
                    </div>
                </div>
            </div>
        </section>
        <!-- Our team Section -->
        <section class="team">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <div class="section-title text-center mb-5">
                            <h3 class="block-title fs-25 mb-2 font-weight-bold">
                                Our <strong>Team</strong></h3>
                            <div class="sub-title fw-bold my-3 text-black-50">
                                Meet the people who make awesome stuffs
                            </div>
                        </div>
                        <!-- /.End of section title -->
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-md-3">
                        <div class="team-member">
                            <figure>
                                <img src="/img/rhapsody_in_red_by_4_the_journey_dfb9cj7-fullview.jpg"
                                    style="height: 382px; width: 312px; object-fit: cover;" alt="" class="img-fluid">
                            </figure>
                            <h5 class="fw-bold mt-2 mb-0">Manh Thang</h5>
                            <p class="mb-0 fw-bold text-black-50">UX/UI</p>
                        </div>
                        <!-- /.End of team member -->
                    </div>
                    <div class="col-md-3">
                        <div class="team-member">
                            <figure>
                                <img src="/img/rhapsody_in_red_by_4_the_journey_dfb9cj7-fullview.jpg"
                                    style="height: 382px; width: 312px; object-fit: cover;" alt="" class="img-fluid">
                            </figure>
                            <h5 class="fw-bold mt-2 mb-0">Manh Thang</h5>
                            <p class="mb-0 fw-bold text-black-50">HTML/CSS</p>
                        </div>
                        <!-- /.End of team member -->
                    </div>
                    <div class="col-md-3">
                        <div class="team-member">
                            <figure>
                                <img src="/img/rhapsody_in_red_by_4_the_journey_dfb9cj7-fullview.jpg"
                                    style="height: 382px; width: 312px; object-fit: cover;" alt="" class="img-fluid">
                            </figure>
                            <h5 class="fw-bold mt-2 mb-0">Manh Thang</h5>
                            <p class="mb-0 fw-bold text-black-50">Web Developer</p>
                        </div>
                        <!-- /.End of team member -->
                    </div>
                    <div class="col-md-3">
                        <div class="team-member">
                            <figure>
                                <img src="/img/rhapsody_in_red_by_4_the_journey_dfb9cj7-fullview.jpg"
                                    style="height: 382px; width: 312px; object-fit: cover;" alt="" class="img-fluid">
                            </figure>
                            <h5 class="fw-bold mt-2 mb-0">Terry Fletcher</h5>
                            <p class="mb-0 fw-bold text-black-50">Web Developer</p>
                        </div>
                        <!-- /.End of team member -->
                    </div>
                </div>
            </div>
        </section>
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

    </div>
</body>

</html>