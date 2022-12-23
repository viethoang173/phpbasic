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

  <title>Booking Details</title>
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

  <div id="booking-detail">
    <section class="detail mt-5">
      <div class="container">
        <p class="text-center bg-detail fw-bold">Awesome choice! You're getting a great deal with your rate.</p>
        <div class="row">
          <div class="col-lg-4">
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
            <table class="table">
              <thead>
                <tr>
                  <th scope="col"></th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Twin Room</td>
                  <td>$2000</td>
                </tr>
                <tr>
                  <td>Adults</td>
                  <td>2 Person</td>
                </tr>
                <tr>
                  <td>Room Size</td>
                  <td>2 Person</td>
                </tr>
                <tr>
                  <td>No of Room</td>
                  <td>01</td>
                </tr>
                <tr>
                  <td>Tax (10%)</td>
                  <td>$200</td>
                </tr>
                <tr>
                  <td><input type="text" class="coupon"></td>
                  <td><button class="sign fw-bold text-white">Coupon</button></td>
                </tr>
                <tr>
                  <th>Total Price</th>
                  <th>$2200</th>
                </tr>
              </tbody>
            </table>
            <div class="card d-flex flex-row mt-3">
              <img class="card-img-top img-detail ms-1 mt-4" src="/img/piggy-bank.png" alt="Title" />
              <div class="card-body">
                <h5 class="card-title mt-2">Save up to 10%</h5>
                <p class="card-text mt-2">
                  Members get access to an exclusive discounts on mnhthng.com.
                </p>
              </div>
            </div>
            <div class="card d-flex flex-row  mt-3">
              <img class="card-img-top img-detail ms-1 mt-4" src="/img/piggy-bank.png" alt="Title" />
              <div class="card-body">
                <h5 class="card-title mt-2">Save up to 10%</h5>
                <p class="card-text mt-2">
                  Members get access to an exclusive discounts on mnhthng.com.
                </p>
              </div>
            </div>
            <div class="card d-flex flex-row  mt-3">
              <img class="card-img-top img-detail ms-1 mt-4" src="/img/piggy-bank.png" alt="Title" />
              <div class="card-body">
                <h5 class="card-title mt-2">Save up to 10%</h5>
                <p class="card-text mt-2">
                  Members get access to an exclusive discounts on mnhthng.com.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-8">

            <form class="mt-2">
              <div class="row mb-4">
                <div class="col">
                  <div class="form-outline">
                    <label class="form-label" for="form6Example1 ">First name *</label>
                    <input type="text" id="form6Example1" class="form-control" />
                  </div>
                </div>
                <div class="col">
                  <div class="form-outline">
                    <label class="form-label" for="form6Example2">Last name *</label>
                    <input type="text" id="form6Example2" class="form-control" />
                  </div>
                </div>
              </div>

              <div class="row mb-4">
                <div class="col">
                  <div class="form-outline">
                    <label class="form-label" for="form6Example1 ">Email *</label>
                    <input type="email" id="form6Example1" class="form-control" />
                  </div>
                </div>
                <div class="col">
                  <div class="form-outline">
                    <label class="form-label" for="form6Example2">Phone *</label>
                    <input type="tel" id="form6Example2" class="form-control" />
                  </div>
                </div>
              </div>

              <!-- Text input -->
              <div class="form-outline mb-4">
                <label class="form-label" for="form6Example4">Address *</label>
                <input type="text" id="form6Example4" class="form-control" />
              </div>

              <!-- Carousel -->
              <div class="row py-3 mx-1 mb-4 bg-white rounded-2 border">
                <div class="col-lg-6">
                  <div id="carousel-example" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="/img/explore-1.jpg" alt="Los Angeles" class="d-block" style="width:100%">
                        <div class="carousel-caption">
                          <h3>Los Angeles</h3>
                          <p>We had such a great time in LA!</p>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="/img/explore-1.jpg" alt="Chicago" class="d-block" style="width:100%">
                        <div class="carousel-caption">
                          <h3>Chicago</h3>
                          <p>Thank you, Chicago!</p>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="/img/explore-1.jpg" alt="New York" class="d-block" style="width:100%">
                        <div class="carousel-caption">
                          <h3>New York</h3>
                          <p>We love the Big Apple!</p>
                        </div>
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carousel-example"
                      data-bs-slide="prev">
                      <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carousel-example"
                      data-bs-slide="next">
                      <span class="carousel-control-next-icon"></span>
                    </button>
                  </div>
                </div>
                <div class="col-lg-6">
                  <p class="fw-bold">Twin Room</p>
                  <p>Non-refundable, Breakfast included</p>
                </div>
              </div>

              <div class="form-outline mb-4">
                <label class="form-label" for="form6Example7">Additional information</label>
                <textarea class="form-control" id="form6Example7" rows="4"></textarea>
              </div>
              

              <!-- Submit button -->
              <div class="d-flex justify-content-center">
                <button type="submit" class="btn sign text-white fw-bold btn-block mb-4">Place order</button>
              </div>
            </form>
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
          <p class="fw-bold text-black-50">Lô CX01, Khu đô thị Văn Khê, Phường La Khê, Quận Hà Đông, Hà Nội, Việt Nam
          </p>
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