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

    <title>Log In</title>
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

    <div id="sign-in">
        <section class="login bg-white h-100 gradient-form">
            <div class="container py-5 h-100">
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                  <div class="card rounded-3 text-black">
                    <div class="row g-0">
                      <div class="col-lg-6">
                        <div class="card-body p-md-5 mx-md-4">
          
                          <div class="text-center">
                            <img src="/img/bird.png"
                              style="width: 185px;" alt="logo">
                            <h3 class="mt-4 mb-5">Log in</h3>
                          </div>
          
                          <form>
                            <p class="fw-bold">Please login to your account</p>
          
                            <div class="form-outline mb-4">
                                <label class="form-label fw-bold text-black-50" for="form2Example11">Username</label>
                              <input type="email" id="form2Example11" class="form-control"
                                placeholder="Phone number or email address"/>
                            </div>
          
                            <div class="form-outline mb-4">
                                <label class="form-label fw-bold text-black-50" for="form2Example22">Password</label>
                              <input type="password" id="form2Example22" class="form-control" />
                            </div>
          
                            <div class="text-center pt-1 d-flex flex-column mb-5 pb-1">
                              <button class="btn btn-block border-0 gradient-custom-2 mb-3 fw-bold text-white" type="button">Log
                                in</button>
                              <a class="text-muted fw-bold text-black-50" href="#">Forgot password?</a>
                            </div>
          
                            <div class="d-flex align-items-center justify-content-center pb-4">
                              <p class="mb-0 me-2 fw-bold text-black-50">Don't have an account?</p>
                              <button type="button" class="btn fw-bold create-new" onclick="window.location.href='sign-up.html'">Create new</button>
                            </div>
          
                          </form>
          
                        </div>
                      </div>
                      <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                        <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                          <h3 class="mb-4">We are more than just a Hotel</h3>
                          <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
    </div>

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